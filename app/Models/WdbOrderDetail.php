<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbOrderDetail
 *
 * @property int $id
 * @property string $order_sn
 * @property int $goods_id
 * @property int $goods_ext_id
 * @property string $goods_detail
 * @property float $unit_price
 * @property float $vip_price
 * @property int $number
 * @property float $amount
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereGoodsDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereGoodsExtId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderDetail whereVipPrice($value)
 * @mixin \Eloquent
 */
class WdbOrderDetail extends Eloquent
{
	protected $table = 'wdb_order_detail';
	protected $primaryKey = 'id';

	protected $casts = [
		'goods_id' => 'int',
		'goods_ext_id' => 'int',
		'unit_price' => 'float',
		'vip_price' => 'float',
		'number' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'order_sn',
		'goods_id',
		'goods_ext_id',
		'goods_detail',
		'unit_price',
		'vip_price',
		'number',
		'amount'
	];
}
