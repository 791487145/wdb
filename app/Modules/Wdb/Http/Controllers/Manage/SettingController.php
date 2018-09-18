<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\WdbDapartment;
use App\Modules\Wdb\Models\WdbRegisionManager;
use App\Modules\Wdb\Models\WdbRegisionManageShop;
use App\Modules\Wdb\Models\WdbRole;
use App\Modules\Wdb\Models\WdbShop;
use App\Modules\Wdb\Models\WdbUser;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;

class SettingController extends WdbController
{
    /**
     * 部门列表
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function departmentList(Request $request)
    {
        $departments = WdbDapartment::get();
        $count = WdbDapartment::count();

        $data = array(
            'departments' => $departments,
            'count'    => $count
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    /**
     * 部门创建
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function departmentCreate(Request $request)
    {
        $department = new WdbDapartment();
        $department->department_name = $request->post('department_name');
        $department->describe = $request->post('describe');
        $department->save();
        return $this->formatResponse('添加成功');
    }

    /**
     * 部门删除
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function departmentDelete(Request $request)
    {
        $department = WdbDapartment::whereId($request->post('department_id'))->first();
        $user = $department->department_user_med();
        if(!$user->isEmpty()){
            return $this->formatResponse('该部门下有成员存在，不能删除',$this->errorStatus);
        }

        $department->delete();
        return $this->formatResponse('删除成功');
    }

    /**
     * 部门详情
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function departmentInfo(Request $request)
    {
        $department =  $department = WdbDapartment::whereId($request->post('department_id'))->first();
        return $this->formatResponse('获取成功',$this->successStatus,$department);
    }

    /**
     * 部门修改
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function departmentUpdate(Request $request)
    {
        $data = array(
            'department_name' => $request->post('department_name'),
            'describe' => $request->post('describe')
        );

        WdbDapartment::whereId($request->post('department_id'))->update($data);
        return $this->formatResponse('修改成功');
    }

    public function regisionList(Request $request)
    {
        $registion_managers = WdbRegisionManager::orderBy('id','asc')->get();

        foreach ($registion_managers as $registion_manager){
            $user = $registion_manager->user()->first();
            $registion_manager->user_name = $user->name;
        }

        return $this->formatResponse('获取成功',$this->successStatus,$registion_managers);
    }

    public function regisionCreate(Request $request)
    {
        DB::transaction(function () use($request) {

            $registion = new WdbRegisionManager();
            $registion->name = $request->post('name');
            $registion->mobile = $request->post('mobile');
            $registion->describe = $request->post('describe');
            $registion->save();

            $registion->assigeUser($request->post('user_id'));

        });

        return $this->formatResponse('添加成功',$this->successStatus);
    }

    public function regisionDelete(Request $request)
    {
        $regision = WdbRegisionManager::whereId($request->post('regision_id'))->first();

        $user = $regision->user()->first();
        if(!is_null($user)){
            $regision->deleteUser($user);
        }
        $shop = $regision->shops()->get();
        if(!$shop->isEmpty()){
            $regision->deleteShop($shop);
        }
        $regision->delete();

        return $this->formatResponse('删除成功',$this->successStatus);
    }

    public function regisionInfo(Request $request)
    {
        $registion_manager = WdbRegisionManager::whereId($request->post('regision_id'))->first();
        $shops = WdbShop::select('id','name')->get();

        $user = $registion_manager->user()->first();
        $registion_manager->user_id = $user->id;
        $registion_manager_shop_ids = WdbRegisionManageShop::whereRegisionManageId($registion_manager->id)->pluck('shop_id');

        $data = array(
            'registion_manager' => $registion_manager,
            'shops' => $shops,
            'registion_manager_shop_ids' => $registion_manager_shop_ids
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    public function regisionUpdate(Request $request)
    {
        $data = array(
            'name' => $request->post('name'),
            'mobile' => $request->post('mobile'),
            'describe' => $request->post('describe')
        );

        $registion_manager = WdbRegisionManager::whereId($request->post('regision_id'))->first();

        $registion_manager->update($data);
        $registion_manager->assigeUser($request->post('user_id'));
        $registion_manager->assigeShop(explode(",",$request->post('shop_id')));

        return $this->formatResponse('修改成功',$this->successStatus);
    }













}
