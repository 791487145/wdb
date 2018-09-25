<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 07:56:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbUserShop
 *
 * @property int $id
 * @property int $shop_id
 * @property int $user_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserShop whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserShop whereUserId($value)
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
