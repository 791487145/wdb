<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 11 Oct 2018 08:21:51 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * App\Modules\Wdb\Models\WdbOrder
 *
 * @property int $id
 * @property string|null $order_no 订单编号
 * @property int $shop_assistant_id 导购id
 * @property int $shop_id 门店id
 * @property string|null $member_name
 * @property int $member_id 会员id
 * @property int $pay_way 支付方式1支付宝2微信
 * @property string|null $tracking_number 物流单号
 * @property int $physical_way 物流方式1自取2物流
 * @property float $price 订单总价
 * @property float $actual_payment 实付
 * @property int $use_integral 使用积分
 * @property int $order_category 订单类型1普通订单；2积分兑换
 * @property string|null $consignee_info 收货人详细信息
 * @property string|null $comment 备注
 * @property int $status 1未支付；2代发货3待收货4完成10申请售后11拒绝售后12售后同意
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbOrderDetail[] $order_detail
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbOrderLog[] $order_log
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereActualPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereConsigneeInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereMemberName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereOrderCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder wherePayWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder wherePhysicalWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereShopAssistantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereTrackingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereUseIntegral($value)
 * @mixin \Eloquent
 * @property float|null $tracking_price 物流价格
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrder whereTrackingPrice($value)
 */
class WdbOrder extends Eloquent
{
	protected $table = 'wdb_order';
	protected $primaryKey = 'id';

	//支付方式
	const PAY_WAY_ALIPAY = 1;
	const PAY_WAY_WX = 2;

	//物流
	const PHYSICAL_WAY_ZITI = 1;
	const PHYSICAL_WAY_WULIU = 2;

	//订单类型
	const ORDER_CATEGORY_PUB = 1;
	const ORDER_CATEGORY_INTEGRAL = 2;

	//订单状态
    const ORDER_STATUS_NO_PAY = 1;
    const ORDER_STATUS_DELIVER_GOODS = 2;
    const ORDER_STATUS_GOODS_RECEIVE = 3;
    const ORDER_STATUS_SUCCESS = 4;
    const ORDER_STATUS_REFUND = 10;
    const ORDER_STATUS_REFUND_REFUSE = 11;
    const ORDER_STATUS_REFUND_ING = 12;

    protected $casts = [
        'shop_assistant_id' => 'int',
        'shop_id' => 'int',
        'member_id' => 'int',
        'pay_way' => 'int',
        'physical_way' => 'int',
        'price' => 'float',
        'actual_payment' => 'float',
        'use_integral' => 'int',
        'order_category' => 'int',
        'status' => 'int'
    ];

    protected $fillable = [
        'order_no',
        'shop_assistant_id',
        'shop_id',
        'member_name',
        'member_id',
        'pay_way',
        'tracking_number',
        'physical_way',
        'price',
        'actual_payment',
        'use_integral',
        'order_category',
        'consignee_info',
        'comment',
        'status'
    ];

	//订单商品
	public function order_detail()
    {
        return $this->belongsToMany(WdbOrderDetail::class,'wdb_order_orderdetail','order_id','order_detail_id');
    }

    //订单日志
    public function order_log()
    {
        return $this->belongsToMany(WdbOrderLog::class,'wdb_order_orderlog','order_id','order_log_id');
    }

    //添加订单日志
    public function assignOrderLog($order_log_id)
    {
        return $this->order_log()->attach($order_log_id);
    }

    static function statusCN($static,$way)
    {
        if($way == 'pay_way'){
            $param = array(
                self::PAY_WAY_ALIPAY => '支付宝',
                self::PAY_WAY_WX => '微信'
            );
        }

        if($way == 'physical_way'){
            $param = array(
                self::PHYSICAL_WAY_ZITI => '支付宝',
                self::PHYSICAL_WAY_WULIU => '微信'
            );
        }

        if($way == 'order_category'){
            $param = array(
                self::PAY_WAY_ALIPAY => '支付宝',
                self::PAY_WAY_WX => '微信'
            );
        }

        if($way == 'pay_way'){
            $param = array(
                self::ORDER_CATEGORY_PUB => '支付宝',
                self::ORDER_CATEGORY_INTEGRAL => '微信'
            );
        }

        if($way == 'status'){
            $param = array(
                self::ORDER_STATUS_NO_PAY => '未支付',
                self::ORDER_STATUS_DELIVER_GOODS => '代发货',
                self::ORDER_STATUS_GOODS_RECEIVE => '待收货',
                self::ORDER_STATUS_SUCCESS => '完成',
                self::ORDER_STATUS_REFUND => '申请售后',
               /* self::ORDER_STATUS_REFUND_REFUSE => '未支付',
                self::ORDER_STATUS_REFUND_ING => '未支付',*/
            );
        }

        return $param[$static];
    }
}
