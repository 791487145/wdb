<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 03:56:26 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbGoodsCategory
 *
 * @property int $id
 * @property string|null $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGoodsCategory whereUpdatedAt($value)
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
