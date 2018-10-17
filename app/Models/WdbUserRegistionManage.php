<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbUserRegistionManage
 *
 * @property int $id
 * @property int $user_id
 * @property int $regision_manage_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserRegistionManage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserRegistionManage whereRegisionManageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserRegistionManage whereUserId($value)
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
