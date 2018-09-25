<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 07:56:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbGoodsCategory
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbGoodsCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbGoodsCategory extends Eloquent
{
	protected $table = 'wdb_goods_category';
	protected $primaryKey = 'id';

	protected $fillable = [
		'name'
	];
}
