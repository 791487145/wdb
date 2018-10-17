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
        }
    }












}
