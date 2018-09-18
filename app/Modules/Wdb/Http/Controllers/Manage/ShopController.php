<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\ConfCity;
use App\Modules\Wdb\Models\WdbMenu;
use App\Modules\Wdb\Models\WdbRegisionManageShop;
use App\Modules\Wdb\Models\WdbShop;
use App\Modules\Wdb\Models\WdbUserShop;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;

class ShopController extends WdbController
{
    /**
     * 门店列表
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function shopList(Request $request)
    {
        $shops = new WdbShop();

        $regision_manage_id = $request->post('regision_manage_id','');
        if(!empty($regision_manage_id)){
            $shop_ids = WdbRegisionManageShop::whereRegisionManageId($regision_manage_id)->orderBy('shop_id','asc')->pluck('shop_id');
            $shops = $shops->whereIn('id',$shop_ids);
        }

        $name = $request->post('name','');
        if(!empty($name)){
            $shops = $shops->where('name','like',"%".$name."%");
        }

        $status = $request->post('status','');
        if(!empty($status)){
            $shops = $shops->whereStatus($status);
        }

        $shops = $shops->forPage($request->post('page',1),$request->post('limit',$this->limit))->select('id','name','fix_phone','district','status')->get();
        foreach ($shops as $shop){
            $shop->shop_manager = $shop->shop_user()->first()->name;
            $shop->shop_regision_manage_name = $shop->shop_registion_manage()->first()->name;
            $district = json_decode($shop->district,true);
            $shop->district = $district['district'];
            $shop->status_name = WdbShop::statusCN($shop->status);
        }
        $count = count($shops);

        $data = array(
            'count' => $count,
            'shops' => $shops
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    /**
     * 门店添加
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function shopCreate(Request $request)
    {
        DB::transaction(function () use($request) {

            $shop = new WdbShop();
            $shop->name = $request->post('name');
            $shop->fix_phone = $request->post('fix_phone');
            $shop->shop_no = $request->post('shop_no');
            $district = array(
                'province' => $request->post('province'),
                'city' => $request->post('city'),
                'region' => $request->post('region'),
                'address' => $request->post('address')
            );
            $district['district'] = ConfCity::getName($district['province']).ConfCity::getName($district['city']).ConfCity::getName($district['region']).$district['address'];

            $shop->district = json_encode($district);
            $shop->logo = $request->post('logo');
            $shop->lon_lati = '2342';
            $shop->save();

            $shop->assignUser($request->post('user_id'));
            $shop->assignRegision($request->post('regision_id'));

        });

        return $this->formatResponse('添加成功',$this->successStatus);
    }

    /**
     * 门店删除
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function shopDelete(Request $request)
    {
        $shop = WdbShop::whereId($request->post('shop_id'))->first();
        if(is_null($shop)){
            return $this->formatResponse('门店不存在',$this->errorStatus);
        }

        $regision_manage = $shop->shop_registion_manage()->first();

        $user_shop = WdbUserShop::whereShopId($shop->id)->get();
        if($user_shop->isEmpty()){
            return $this->formatResponse('门店内有店长存在，不能删除',$this->errorStatus);
        }
        DB::transaction(function () use($request,$shop,$regision_manage) {
            $shop->deleteShop($regision_manage);
            WdbShop::whereId($shop->id)->delete();
        });

        return $this->formatResponse('删除成功',$this->successStatus);
    }

    /**
     * 门店详情
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function shopInfo(Request $request)
    {
        $shop_id = $request->post('shop_id');
        $shop = WdbShop::whereId($shop_id)->select('id','name','fix_phone','district','status')->first();

        $shop->shop_manager = $shop->shop_user()->first()->name;
        $shop->shop_regision_manage_name = $shop->shop_registion_manage()->first()->name;
        $district = json_decode($shop->district,true);
        $shop->district = $district['district'];
        $shop->status_name = WdbShop::statusCN($shop->status);
        $shop->shop_assistants;

        return $this->formatResponse('获取成功',$this->successStatus,$shop);
    }

    /**
     * 门店修改
     * @param Request $request
     */
    public function shopUpdate(Request $request)
    {
        $shop = WdbShop::whereId($request->post('shop_id'))->first();

        $data = array(
            'name' => $request->post('name'),
            'fix_phone' => $request->post('fix_phone'),
            'shop_no' => $request->post('shop_no'),
            'logo' => $request->post('logo')
        );

        $district = array(
            'province' => $request->post('province'),
            'city' => $request->post('city'),
            'region' => $request->post('region'),
            'address' => $request->post('address')
        );
        $district['district'] = ConfCity::getName($district['province']).ConfCity::getName($district['city']).ConfCity::getName($district['region']).$district['address'];
        $data['district'] = $district;
        $data['lon_lati'] = '2342';

        $shop->update($data);
        $shop->assignUser($request->post('user_id'));
        $shop->assignRegision($request->post('regision_id'));

        return $this->formatResponse('修改完成',$this->successStatus);
    }















}
