<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\Company;
use App\Modules\Wdb\Models\ConfCity;
use App\Modules\Wdb\Models\WdbGood;
use App\Modules\Wdb\Models\WdbGoodsCategory;
use App\Modules\Wdb\Models\WdbGoodsExt;
use App\Modules\Wdb\Models\WdbMenu;
use App\Modules\Wdb\Models\WdbOrder;
use App\Modules\Wdb\Models\WdbOrderLog;
use App\Modules\Wdb\Models\WdbRegisionManageShop;
use App\Modules\Wdb\Models\WdbShop;
use App\Modules\Wdb\Models\WdbUserShop;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Excel;

class OrderController extends WdbController
{
    /**
     * 订单列表
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function ordersList(Request $request)
    {
        $shops = Company::whereId($this->company_id)->first()->shop()->whereStatus(WdbShop::STATUS_NORMAL)->select('id','name')->get();

        foreach ($shops as $shop){
            $shop_ids[] = $shop->id;
        }

        $orders = new WdbOrder();

        $shop_id = $request->post('shop_id',$shop_ids[0]);
        if(!in_array($shop_id,$shop_ids)){
            return $this->formatResponse('门店参数不正确',$this->errorStatus);
        }

        $orders = $orders->whereShopId($shop_id);

        $order_no = $request->post('order_no','');
        if(!empty($order_no)){
            $orders = $orders->whereOrderNo($order_no);
        }

        $shop_id = $request->post('shop_id',$shop_ids[0]);
        $orders = $orders->whereShopId($shop_id);

        $time_start = $request->post('time_start','');
        if(!empty($time_start)){
            $orders = $orders->where('created_at','>',$time_start);
        }

        $time_end = $request->post('time_end','');
        if(!empty($time_end)){
            $orders = $orders->where('created_at','<',$time_end);
        }

        $pay_way = $request->post('pay_way','');
        if(!empty($pay_way)){
            $orders = $orders->wherePayWay($pay_way);
        }

        $physical_way = $request->post('physical_way','');
        if(!empty($physical_way)){
            $orders = $orders->wherePhysicalWay($physical_way);
        }

        $order_category = $request->post('order_category','');
        if(!empty($order_category)){
            $orders = $orders->whereOrderCategory($order_category);
        }

        $orders = $orders->orderBy('id','desc')->forPage($request->post('page',$this->page),$request->post('limit',$this->limit))->get();

        foreach ($orders as $order){
            $order->goods = $order->order_detail()->get();
            $order->pay_way_name = WdbOrder::statusCN($order->pay_way,'pay_way');
            $order->physical_way_name = WdbOrder::statusCN($order->physical_way,'physical_way');
            $order->order_category_name = WdbOrder::statusCN($order->order_category,'order_category');
            $order->status_name = WdbOrder::statusCN($order->status,'status');
        }

        $data = array(
            'orders' => $orders,
            'count' => count($orders),
            'shops' => $shops
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    /**
     * 订单详情
     * @param Request $request
     */
    public function ordersInfo(Request $request)
    {
        $order = WdbOrder::whereId($request->post('order_id'))->first();
        $order_goods = $order->order_detail()->get();
        $order_logs = $order->order_log()->orderBy('id','asc')->get();

        $data = array(
            'order' => $order,
            'order_goods' => $order_goods,
            'order_logs' => $order_logs
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    /**
     * 发货、收货成功
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function orderShipments(Request $request)
    {
        $status = $request->post('status','');
        $order = WdbOrder::whereOrderNo($request->post('order_no'))->first();
        if(is_null($order)){
            return $this->formatResponse('订单不存在',$this->errorStatus);
        }

        DB::transaction(function () use($order,$request,$status) {
            WdbOrder::whereOrderNo($request->post('order_no'))->update(['status' => $status]);
            if($status == WdbOrder::ORDER_STATUS_GOODS_RECEIVE){
                $tracking_number = $request->post('tracking_number',00000000);
                WdbOrder::whereOrderNo($request->post('order_no'))->update(['tracking_number' => $tracking_number]);
            }

            $order_log = new WdbOrderLog();
            $order_log->order_no = $order->order_no;
            $order_log->status = $status;
            $order_log->save();

            $order->assignOrderLog($order_log->id);
        });
        return $this->formatResponse('操作成功');
    }

    public function orderEvaluate(Request $request)
    {
        $order_no = $request->post('order_no');
        $order = WdbOrder::whereOrderNo($order_no)->first();
    }













}
