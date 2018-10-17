<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 11 Oct 2018 08:21:51 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbOrderDetail
 *
 * @property int $id
 * @property string|null $order_sn
 * @property int $goods_id
 * @property int $goods_ext_id
 * @property string|null $goods_detail
 * @property float $unit_price
 * @property int $number
 * @property float $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereGoodsDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereGoodsExtId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderDetail whereUpdatedAt($value)
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
		'number' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'order_sn',
		'goods_id',
		'goods_ext_id',
		'goods_detail',
		'unit_price',
		'number',
		'amount'
	];
}
