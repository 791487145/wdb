<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbShopGood
 *
 * @property int $id
 * @property int $good_id
 * @property int $shop_id
 * @property int $status
 * @property float $price
 * @property int $sale_num
 * @property int $is_recomment
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopGood whereGoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopGood whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopGood whereIsRecomment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopGood wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopGood whereSaleNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopGood whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopGood whereStatus($value)
 * @mixin \Eloquent
 */
class WdbShopGood extends Eloquent
{
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'good_id' => 'int',
		'shop_id' => 'int',
		'status' => 'int',
		'price' => 'float',
		'sale_num' => 'int',
		'is_recomment' => 'int'
	];

	protected $fillable = [
		'good_id',
		'shop_id',
		'status',
		'price',
		'sale_num',
		'is_recomment'
	];
}
