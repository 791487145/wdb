<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 09:09:37 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbGoodsGoodsExt
 *
 * @property int $id
 * @property int $goods_id
 * @property int $goods_ext_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsGoodsExt whereGoodsExtId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsGoodsExt whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsGoodsExt whereId($value)
 * @mixin \Eloquent
 */
class WdbGoodsGoodsExt extends Eloquent
{
	protected $table = 'wdb_goods_goods_ext';
	protected $primaryKey = 'id';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'goods_id' => 'int',
		'goods_ext_id' => 'int'
	];

	protected $fillable = [
		'goods_id',
		'goods_ext_id'
	];
}
