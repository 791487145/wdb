<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Sep 2018 02:48:28 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbUserRole
 *
 * @property int $id
 * @property int $role_id
 * @property int $user_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRole whereUserId($value)
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
