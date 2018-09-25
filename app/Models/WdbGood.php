<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 07:56:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbGood
 *
 * @property int $id
 * @property string $name
 * @property string $goods_no
 * @property int $sale_num
 * @property string $goods_describe
 * @property string $thumbnail_pic
 * @property int $group_id
 * @property int $category_id
 * @property int $data_time
 * @property int $data_status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $goods_detail
 * @property int $integral_status
 * @property float $price
 * @property int $repertory_num
 * @property float $line_price
 * @property int $status
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereDataStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereDataTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereGoodsDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereGoodsDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereGoodsNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereIntegralStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereLinePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereRepertoryNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereSaleNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereThumbnailPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGood whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbGood extends Eloquent
{
	protected $primaryKey = 'id';

	protected $casts = [
		'sale_num' => 'int',
		'group_id' => 'int',
		'category_id' => 'int',
		'data_time' => 'int',
		'data_status' => 'int',
		'integral_status' => 'int',
		'price' => 'float',
		'repertory_num' => 'int',
		'line_price' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'goods_no',
		'sale_num',
		'goods_describe',
		'thumbnail_pic',
		'group_id',
		'category_id',
		'data_time',
		'data_status',
		'goods_detail',
		'integral_status',
		'price',
		'repertory_num',
		'line_price',
		'status'
	];
}
