<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\WdbMenu;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;

class PermissionController extends WdbController
{

    public function permissionList(Request $request)
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

   public function permissionUpdate(Request $request)
   {
       $menu_id = $request->post('menu_id');
       $menu_tile = $request->post('title');
       WdbMenu::whereId($menu_id)->update(['title' => $menu_tile]);

       return $this->formatResponse('修改成功',$this->successStatus);
   }

   public function permissionInfo(Request $request)
   {
       $menu = WdbMenu::whereId($request->post('menu_id'))->select('id','name','title','parent_id')->first();
       $menu->parent_name = WdbMenu::whereId($menu->parent_id)->value('title');

       return $this->formatResponse('获取成功');
   }











}
