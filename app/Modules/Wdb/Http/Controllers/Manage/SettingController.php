<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\WdbDapartment;
use App\Modules\Wdb\Models\WdbRole;
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
        $departments = WdbDapartment::forPage($request->post('page',1),$request->post('limit',$this->limit))->get();
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













}
