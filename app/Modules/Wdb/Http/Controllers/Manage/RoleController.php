<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\WdbRole;
use App\Modules\Wdb\Models\WdbUser;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;

class RoleController extends WdbController
{
    public function roleList(Request $request)
    {
        $roles = WdbRole::get();
        return $this->formatResponse('获取成功',$this->successStatus,$roles);
    }

    /**
     * 角色创建
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function roleCreate(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data,[
            'name' => 'required|unique:wdb_role',
        ],[
            'name.required' => '请填写角色名',
            'name.unique' => '该角色名已存在',
        ]);
        $error = $validator->errors()->all();
        if(count($error)){
            return $this->formatResponse($error[0],$this->errorStatus);
        }

        $role = new WdbRole();
        $role->name = $data['name'];
        $role->description = isset($data['description']) ? $data['description'] : '';
        $role->save();

        return $this->formatResponse('添加成功');
    }

    /**
     * 角色详情
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function roleInfo(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data,[
            'role_id' => 'required|integer'
        ],[
            'role_id.required' => '请填写角色id',
            'role_id.integer' => '请输入整数'
        ]);
        $error = $validator->errors()->all();
        if(count($error)){
            return $this->formatResponse($error[0],$this->errorStatus);
        }

        $role = WdbRole::whereId($request->post('role_id'))->first();
        return $this->formatResponse('获取成功',$this->successStatus,$role);
    }

    /**
     * 角色修改
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function roleUpdate(Request $request)
    {
        $data = $request->all();

        if($data['role_id'] == $this->admin ){
            return $this->formatResponse('暂时没有权限修改超级管理员');
        }

        $validator = Validator::make($data,[
            'role_id' => 'required|integer'
        ],[
            'role_id.required' => '请填写角色id',
            'role_id.integer' => '请输入整数'
        ]);
        $error = $validator->errors()->all();
        if(count($error)){
            return $this->formatResponse($error[0],$this->errorStatus, $error);
        }

        $role_id = $data['role_id'];
        unset($data['role_id']);
        if(!empty($data)){
            WdbRole::whereId($role_id)->update($data);
        }

        return $this->formatResponse('修改成功',$this->successStatus);
    }

    /**
     * 角色删除
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function roleDelete(Request $request)
    {
        $role = WdbRole::whereId($request->post('role_id'))->first();
        $user_role = $role->role_user;
        if(!$user_role->isEmpty()){
            return $this->formatResponse('该角色下有多个账号，不能删除',$this->errorStatus);
        }

        if($role->id == $this->admin ){
            return $this->formatResponse('暂时没有权限删除超级管理员',$this->errorStatus);
        }

        $role->destroy($request->post('role_id'));
        return $this->formatResponse('删除成功');
    }

    /**
     * 授权
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
   /* public function assignPermission(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data,[
            'role_id' => 'required|integer',
            'permissions' => 'required|array',
        ],[
            'role_id.required' => 'role_id参数短缺',
            'role_id.integer' => '请输入整数',
            'permissions.required' => 'permissions参数短缺',
            'permissions.array' => 'permissions格式为数组',
        ]);
        $error = $validator->errors()->all();
        if(count($error)){
            return $this->formatResponse($error[0],$this->errorStatus, $error);
        }

        $role = Role::whereId($request->post('role_id'))->first();

        $role->assigePermission($request->post('permissions'));
        return $this->formatResponse('添加成功');
    }*/











}
