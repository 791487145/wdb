<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Sep 2018 02:54:36 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbUserShop
 *
 * @property int $id
 * @property int $shop_id
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserShop whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserShop whereUserId($value)
 * @mixin \Eloquent
 */
class WdbUserShop extends Eloquent
{
	protected $table = 'wdb_user_shop';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'shop_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'shop_id',
		'user_id'
	];
}
