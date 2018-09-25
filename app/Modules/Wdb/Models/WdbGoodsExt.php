<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 09:09:37 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbGoodsExt
 *
 * @property int $id
 * @property int $goods_ext_no
 * @property string|null $goods_ext_name
 * @property float $price 售价
 * @property int $repertory_num 库存
 * @property float $cost_price 成本价
 * @property int $sale_num 销量
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $status 2下架1上架
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt whereCostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt whereGoodsExtName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt whereGoodsExtNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt whereRepertoryNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt whereSaleNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsExt whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbGoodsExt extends Eloquent
{
	protected $table = 'wdb_goods_ext';
	protected $primaryKey = 'id';

	protected $casts = [
		'goods_ext_no' => 'int',
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
