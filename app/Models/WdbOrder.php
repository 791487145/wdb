<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbOrder
 *
 * @property int $id
 * @property string $order_no
 * @property int $shop_assistant_id
 * @property int $shop_id
 * @property string $member_name
 * @property int $member_id
 * @property int $pay_way
 * @property float $tracking_price
 * @property string $tracking_number
 * @property int $physical_way
 * @property float $price
 * @property float $actual_payment
 * @property int $use_integral
 * @property int $order_category
 * @property string $consignee_info
 * @property string $comment
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereActualPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereConsigneeInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereMemberName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereOrderCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder wherePayWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder wherePhysicalWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereShopAssistantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereTrackingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereTrackingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrder whereUseIntegral($value)
 * @mixin \Eloquent
 */
class WdbOrder extends Eloquent
{
	protected $table = 'wdb_order';
	protected $primaryKey = 'id';

	protected $casts = [
		'shop_assistant_id' => 'int',
		'shop_id' => 'int',
		'member_id' => 'int',
		'pay_way' => 'int',
		'tracking_price' => 'float',
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
		'tracking_price',
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
}
