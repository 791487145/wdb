<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Sep 2018 02:54:36 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbRegisionManageShop
 *
 * @property int $id
 * @property int $regision_manage_id
 * @property int $shop_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManageShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManageShop whereRegisionManageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManageShop whereShopId($value)
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
