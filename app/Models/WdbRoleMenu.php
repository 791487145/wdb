<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 07:56:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbRoleMenu
 *
 * @property int $id
 * @property int $role_id
 * @property int $menu_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRoleMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRoleMenu whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRoleMenu whereRoleId($value)
 * @mixin \Eloquent
 */
class WdbRoleMenu extends Eloquent
{
	protected $table = 'wdb_role_menu';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'menu_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'menu_id'
	];
}
