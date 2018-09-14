<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\WdbUser;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class ManageController extends WdbController
{
    /**
     * 管理列表
     * @param Request $request
     * @param WdbUser $wdbUser
     * @return \Illuminate\Http\Response
     */
    public function userList(Request $request,WdbUser $wdbUser)
    {
        $shop_id = $request->post('shop_id');
        if(!empty($shop_id)){
            $wdbUser = $wdbUser->whereShopId($shop_id);
        }

        $department_id = $request->post('department_id');
        if(!empty($department_id)){
            $wdbUser = $wdbUser->whereDepartmentId($department_id);
        }

        $mobile = $request->post('mobile');
        if(!empty($mobile)){
            $wdbUser = $wdbUser->whereMobile($mobile);
        }

        $work_no = $request->post('work_no');
        if(!empty($work_no)){
            $wdbUser = $wdbUser->whereWorkNo($work_no);
        }

        $role_id = $request->post('role_id');
        if(!empty($role_id)){
            $wdbUser = $wdbUser->leftJoin('wdb_user_role','wdb_user_role.role_id','=',$role_id);
        }

        $wdbUser = $wdbUser->select('wdb_user.*')->forPage($request->post('page',1),$request->post('limit',$this->limit))->get();

        foreach ($wdbUser as $value){
            $value->sex_name = $value->sex == 1 ? '男' : '女';
            $value->status_name = $value->status == 1 ? '在职' : '禁用';

            //TODO  门店，部门，角色
        }

        return $this->formatResponse('获取成功',$this->successStatus,$wdbUser);
    }

    /**
     * 用户添加
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function userCreate(Request $request)
    {
        DB::transaction(function () use($request){
            $wdbUser = new WdbUser();
            $wdbUser->name = $request->post('name','');
            $wdbUser->mobile = $request->post('mobile');
            $wdbUser->sex = $request->post('sex',1);
            $wdbUser->department_id = $request->post('department_id');
            $wdbUser->shop_id = $request->post('shop_id');
            $wdbUser->password = bcrypt($request->post('password'));
            $wdbUser->save();

            $work_no = $request->post('work_no','');
            if(empty($work_no)){
                $wdbUser->work_no = date("ymdHis") . sprintf("%03d", substr($wdbUser->id, -3));
                $wdbUser->save();
            }

            $wdbUser->assignRole(array($request->post('role_id')));
        });

        return $this->formatResponse('添加成功',$this->successStatus);
    }

    /**
     * 效验工号,手机号
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkWorkNo(Request $request)
    {
        $work_no = $request->post('work_no','');
        $mobile = $request->post('mobile','');

        $wdb_user = WdbUser::whereWorkNo($work_no)->first();
        if(!is_null($wdb_user)){
            return $this->formatResponse('工单号不能重复',$this->errorLogin);
        }

        $wdb_user = WdbUser::whereMobile($mobile)->first();
        if(!is_null($wdb_user)){
            return $this->formatResponse('手机号不能重复',$this->errorLogin);
        }

        return $this->formatResponse('添加成功',$this->successStatus);
    }

    /**
     * 用户修改
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function userUpdate(Request $request)
    {
        $data = array(
            'name' => $request->post('name'),
            'sex' => $request->post('sex'),
            'work_no' => $request->post('work_no'),
            'status' => $request->post('status'),
            'shop_id' => $request->post('shop_id'),
            'department_id' => $request->post('department_id'),
            'mobile' => $request->post('mobile')
        );

        WdbUser::whereId($request->post('user_id'))->update($data);

        return $this->formatResponse('修改成功',$this->successStatus);
    }

    public function passwordReset(Request $request)
    {
        $user = WdbUser::whereId($request->post('user_id'))->first();
        $role = $user->roles->first();
        if(!is_null($role)){
            $u = Auth::user();
            if($role->id == $this->admin && $u->id != $user->id){
                return $this->formatResponse('超级管理员密码只能自己修改',$this->errorStatus);
            }
        }

        $user->update(['password' => bcrypt($request->post('new_password'))]);
        return $this->formatResponse('修改成功');

        //TODO  角色添加
    }





}
