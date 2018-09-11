<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Sep 2018 02:48:28 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbRoleMenu
 *
 * @property int $id
 * @property int $role_id
 * @property int $menu_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRoleMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRoleMenu whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRoleMenu whereRoleId($value)
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
