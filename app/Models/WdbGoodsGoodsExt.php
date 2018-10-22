<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbGoodsGoodsExt
 *
 * @property int $id
 * @property int $goods_id
 * @property int $goods_ext_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsGoodsExt whereGoodsExtId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsGoodsExt whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsGoodsExt whereId($value)
 * @mixin \Eloquent
 */
class WdbGoodsGoodsExt extends Eloquent
{
	protected $table = 'wdb_goods_goods_ext';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'goods_id' => 'int',
		'goods_ext_id' => 'int'
	];

	protected $fillable = [
		'goods_id',
		'goods_ext_id'
	];
}
