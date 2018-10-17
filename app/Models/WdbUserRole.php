<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbUserRole
 *
 * @property int $id
 * @property int $role_id
 * @property int $user_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserRole whereUserId($value)
 * @mixin \Eloquent
 */
class WdbUserRole extends Eloquent
{
	protected $table = 'wdb_user_role';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'user_id'
	];
}
