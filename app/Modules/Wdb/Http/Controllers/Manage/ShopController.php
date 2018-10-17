<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\ConfCity;
use App\Modules\Wdb\Models\WdbGood;
use App\Modules\Wdb\Models\WdbGoodsCategory;
use App\Modules\Wdb\Models\WdbMenu;
use App\Modules\Wdb\Models\WdbRegisionManageShop;
use App\Modules\Wdb\Models\WdbShop;
use App\Modules\Wdb\Models\WdbShopGood;
use App\Modules\Wdb\Models\WdbUserShop;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Excel;

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
            $lon_lati = file_get_contents('http://api.map.baidu.com/geocoder/v2/?address='.$district['district'].'&output=json&ak='.$this->ak);
            $lon_lati = json_decode($lon_lati,true);
            $shop->district = json_encode($district);
            $shop->logo = $request->post('logo');
            $shop->lon_lati = json_encode($lon_lati['location']);
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
        $lon_lati = file_get_contents('http://api.map.baidu.com/geocoder/v2/?address='.$district['district'].'&output=json&ak='.$this->ak);
        $lon_lati = json_decode($lon_lati,true);
        $data['district'] = $district;
        $data['lon_lati'] = json_encode($lon_lati['location']);

        $shop->update($data);
        $shop->assignUser($request->post('user_id'));
        $shop->assignRegision($request->post('regision_id'));

        return $this->formatResponse('修改完成',$this->successStatus);
    }

    /**
     * 门店商品列表
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function goodsList(Request $request)
    {
        $shop = WdbShop::orderBy('id','asc')->first();
        $shop_id = $request->post('shop_id',$shop->id);

        $wdbShopGood = new WdbShopGood();
        $status = $request->post('good_status','');
        if(!empty($status)){
            $wdbShopGood = $wdbShopGood->whereStatus($status);
        }
        $price_low = $request->post('good_price_low',0);
        if(!empty($price_low)){
            $wdbShopGood = $wdbShopGood->where('price','>=',$price_low);
        }
        $price_up = $request->post('good_price_up',0);
        if(!empty($price_up)){
            $wdbShopGood = $wdbShopGood->where('price','<=',$price_up);
        }

        $goods_id = $wdbShopGood::whereShopId($shop_id)->pluck('good_id');

        $goods = new  WdbGood();
        $goods = $goods->whereIn('id',$goods_id);
        $goods = WdbGood::goods($request,$goods);

        foreach ($goods as $good){
            $shop_good = WdbShopGood::whereShopId($shop_id)->whereGoodId($good->id)->first();
            $good->status_name = WdbShopGood::statusCN($shop_good->status);
            $good->status = $shop_good->status;
            $good->sale_num = $shop_good->sale_num;
        }

        $data = array(
            'count' => count($goods),
            'goods' => $goods
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    /**
     * 门店商品推荐状态
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function goodsRecommend(Request $request)
    {
        WdbShopGood::whereShopId($request->post('shop_id'))->whereGoodId($request->post('good_id'))->update(['is_recomment' => $request->post('is_recomment')]);
        return $this->formatResponse('修改成功');
    }

    /**
     * 门店商品状态
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function goodsStatus(Request $request)
    {
        WdbShopGood::whereShopId($request->post('shop_id'))->whereGoodId($request->post('good_id'))->update(['status' => $request->post('status')]);
        return $this->formatResponse('修改成功');
    }

    /**
     * 门店商品详情
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function shopGoodInfo(Request $request)
    {
        $shop_good = WdbShopGood::whereShopId($request->post('shop_id'))->whereGoodId($request->post('good_id'))->first();
        $shop_good->goods = WdbGood::whereId($request->post('good_id'))->select('name','goods_no','thumbnail_pic','goods_detail')->first();
        return $this->formatResponse('获取成功',$this->successStatus,$shop_good);
    }

    /**
     * 门店商品修改
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function goodUpdate(Request $request)
    {
        $param = array(
            'price' => $request->post('price'),
            'is_recomment' => $request->post('is_recomment'),
            'status' => $request->post('status')
        );
        WdbShopGood::whereShopId($request->post('shop_id'))->whereGoodId($request->post('good_id'))->update($param);
        return $this->formatResponse('修改成功');
     }

    /**
     * 门店关联商品
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
     public function shopAssignGoods(Request $request)
     {
         $action = $request->post('action','all');
         $shop_id = $request->post('shop_id');
         if($action == 'all'){
             $good_ids = WdbGood::pluck('id');
         }else{
             $good_ids = explode(",",$request->post('good_id'));
         }

         $goods = WdbGood::whereIn('id',$good_ids)->select('id','price')->get();
         foreach ($goods as $good){
             $shop_good = WdbShopGood::whereShopId($shop_id)->whereGoodId($good->id)->first();
             if(is_null($shop_good)){
                 $param = array(
                     'good_id' => $good->id,
                     'shop_id' => $shop_id,
                     'status' => WdbShopGood::STATUS_DOWN,
                     'price' => $good->price,
                     'sale_num' => $this->pub,
                     'is_recomment' => WdbShopGood::IS_NOT_RECOMMENT
                 );
                 WdbShopGood::create($param);
             }
         }

         return $this->formatResponse('添加成功');
     }

    /**
     * 门店商品列表
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
     public function shopGoodCreate(Request $request)
     {
         $goods = WdbGood::whereStatus(WdbGood::STATUS_UP)->forPage($request->post('page',$this->pub),$request->post('limit',$this->limit))->select('id','name','price','thumbnail_pic','goods_no','category_id')->get();
         foreach ($goods as $good){
             $good->category_name = WdbGoodsCategory::whereId($good->category_id)->value('name');
         }
         $shop_good_ids = WdbShopGood::whereShopId($request->post('shop_id'))->pluck('good_id');

         $data = array(
             'count' => count($goods),
             'goods' => $goods,
             'shop_good_ids' => $shop_good_ids
         );
         return $this->formatResponse('获取成功',$this->successStatus,$data);
     }

    public function aaa(Request $request)
    {
        $file_path = 'test/232.xls';
        Excel::selectSheets('Sheet1')->load($file_path, function($reader) use($request) {


                $data = $reader->noHeading()->all();
                dd($data);

        });
    }

    public function bbb(Request $request)
    {
        $cellData = [
            ['商品名称','数量','单价','总价'],
            ['太原-大连火车票','20','101.21','2024.2'],
            ['招牌手撕鸡','6','10','60'],
            ['太原-厦门飞机票','7','1000','7000']
        ];
        $a = mb_detect_encoding(json_encode($cellData,JSON_UNESCAPED_UNICODE), array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));

        Excel::create('导入账单格式demo',function($excel) use ($cellData){
            $excel->sheet('score', function($sheet) use ($cellData){
                $sheet->setWidth('A', 40);

                foreach ($cellData as $i=>$val)
                {
                    //dd($val);
                    $sheet->setWidth('A', 40);
                    if($i == 3){
                        $sheet->rows(array($val))->setMergeColumn(array(
                            'columns' => array('A'),
                            'rows' => array(
                                array(4,5),
                            )
                        ));
                    }else{
                        $sheet->rows(array($val));
                    }
                }


                //$sheet;
            });
        })->export('xls');
    }















}
