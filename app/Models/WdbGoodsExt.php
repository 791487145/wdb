<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbGoodsExt
 *
 * @property int $id
 * @property string $goods_ext_no
 * @property string $goods_ext_name
 * @property float $price
 * @property int $repertory_num
 * @property float $cost_price
 * @property int $sale_num
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $status
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt whereCostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt whereGoodsExtName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt whereGoodsExtNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt whereRepertoryNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt whereSaleNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsExt whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbGoodsExt extends Eloquent
{
	protected $table = 'wdb_goods_ext';
	protected $primaryKey = 'id';

	protected $casts = [
		'price' => 'float',
		'repertory_num' => 'int',
		'cost_price' => 'float',
		'sale_num' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'goods_ext_no',
		'goods_ext_name',
		'price',
		'repertory_num',
		'cost_price',
		'sale_num',
		'status'
	];
}
