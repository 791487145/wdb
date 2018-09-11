<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\WdbRole;
use App\Modules\Wdb\Models\WdbUser;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class RoleController extends WdbController
{
    public function roleList(Request $request)
    {
        $roles = WdbRole::get();
        return $this->formatResponse('获取成功',$this->successStatus,$roles);
    }









}
