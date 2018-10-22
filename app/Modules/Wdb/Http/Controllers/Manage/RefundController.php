<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\Company;
use App\Modules\Wdb\Models\CompanyWdbOrderRefund;
use App\Modules\Wdb\Models\ConfCity;
use App\Modules\Wdb\Models\WdbGood;
use App\Modules\Wdb\Models\WdbGoodsCategory;
use App\Modules\Wdb\Models\WdbGoodsExt;
use App\Modules\Wdb\Models\WdbMenu;
use App\Modules\Wdb\Models\WdbOrder;
use App\Modules\Wdb\Models\WdbOrderLog;
use App\Modules\Wdb\Models\WdbOrderRefund;
use App\Modules\Wdb\Models\WdbOrderRefundLog;
use App\Modules\Wdb\Models\WdbRegisionManageShop;
use App\Modules\Wdb\Models\WdbShop;
use App\Modules\Wdb\Models\WdbUserShop;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Excel;

class RefundController extends WdbController
{
    /**
     * 退款列表
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function refundsList(Request $request)
    {
        $refund_ids = CompanyWdbOrderRefund::whereCompanyId($this->company_id)->pluck('order_refund_id');

        $refunds = new WdbOrderRefund();
        $refunds = $refunds->whereIn('id',$refund_ids);

        $order_no = $request->post('order_no','');
        if(!empty($order_no)){
            $refunds = $refunds->whereOrderNo($order_no);
        }

        $start_time = $request->post('start_time','');
        if(!empty($order_no)){
            $refunds = $refunds->where('created_at','>',$start_time);
        }

        $end_time = $request->post('end_time','');
        if(!empty($end_time)){
            $refunds = $refunds->where('created_at','<',$end_time);
        }

        $refund_no = $request->post('refund_no','');
        if(!empty($refund_no)){
            $refunds = $refunds->whereRefundNo($refund_no);
        }

        $refund_way = $request->post('refund_way','');
        if(!empty($refund_way)){
            $refunds = $refunds->whereRefundWay($refund_way);
        }

        $status = $request->post('status','');
        if(!empty($status)){
            $refunds = $refunds->whereStatus($status);
        }

        $refunds = $refunds->forPage($request->post('page',$this->page),$request->post('limit',$this->limit))->orderBy('id','desc')->get();

        foreach ($refunds as $refund){
            $order = WdbOrder::whereOrderNo($refund->order_no)->first();

            $good_details = $order->order_detail()->pluck('goods_detail');
            $good_names = array();
            foreach ($good_details as $good_detail){
                $good = json_decode($good_detail,true);
                $good_names[] = $good['name'];
            }
            $refund->good_names = $good_names;
            $refund->order_amount = $order->actual_payment;
            $refund->status_name = WdbOrderRefund::statusCN($refund->status);
        }

        $data = array(
            'refunds' => $refunds,
            'count' => count($refunds)
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    /**
     * 退款详情
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function refundsInfo(Request $request)
    {
        $refund_id = $request->post('refund_id');
        $refund = WdbOrderRefund::whereId($refund_id)->first();
        $refund->status_name = WdbOrderRefund::statusCN($refund->status);

        $order = WdbOrder::whereOrderNo($refund->order_no)->select('id','order_no','member_name','price','order_category','consignee_info','physical_way','pay_way','comment','shop_id')->first();
        if($order->physical_way == WdbOrder::PHYSICAL_WAY_ZITI){
            $shop_address = WdbShop::whereId($order->shop_id)->value('district');
            $district = json_decode($shop_address,true);
            $order->consignee_info = ConfCity::getName($district['province']).ConfCity::getName($district['city']).ConfCity::getName($district['region']).$district['address'];
        }
        $order->pay_way_name = WdbOrder::statusCN($order->pay_way,'pay_way');
        $order->physical_way_name = WdbOrder::statusCN($order->physical_way,'physical_way');
        $order->order_category_name = WdbOrder::statusCN($order->order_category,'order_category');

        $order_goods = $order->order_detail()->get();
        $refund_logs = WdbOrderRefundLog::whereRefundNo($refund->refund_no)->orderBy('id','asc')->get();

        $data = array(
            'order' => $order,
            'order_goods' => $order_goods,
            'refund_logs' => $refund_logs,
            'refund' => $refund
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }











}
