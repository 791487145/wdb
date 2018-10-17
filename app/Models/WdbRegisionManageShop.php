<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbRegisionManageShop
 *
 * @property int $id
 * @property int $regision_manage_id
 * @property int $shop_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManageShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManageShop whereRegisionManageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManageShop whereShopId($value)
 * @mixin \Eloquent
 */
class WdbRegisionManageShop extends Eloquent
{
	protected $table = 'wdb_regision_manage_shop';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'regision_manage_id' => 'int',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'regision_manage_id',
		'shop_id'
	];
}
