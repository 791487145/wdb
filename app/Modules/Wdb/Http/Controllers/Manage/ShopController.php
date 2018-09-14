<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\WdbMenu;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;

class ShopController extends WdbController
{

    public function sh(Request $request)
    {
        $menus = WdbMenu::whereSide(WdbMenu::SIDE_MENU)->orderBy('order','asc')->select('id','name','title')->get();

        $menu_id = $request->post('menu_id',$menus[0]->id);

        $menu = WdbMenu::whereParentId($menu_id)->orderBy('side','asc')->select('id','name','title','parent_id','created_at','side')->get();

        $data = array(
            'menus' => $menus,
            'menu' => $menu,
            'menu_id' => $menu_id
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }











}
