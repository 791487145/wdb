<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Sep 2018 02:54:36 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbUserRegistionManage
 *
 * @property int $id
 * @property int $user_id
 * @property int $regision_manage_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRegistionManage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRegistionManage whereRegisionManageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRegistionManage whereUserId($value)
 * @mixin \Eloquent
 */
class WdbUserRegistionManage extends Eloquent
{
	protected $table = 'wdb_user_registion_manage';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'regision_manage_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'regision_manage_id'
	];
}
