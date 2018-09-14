<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 14 Sep 2018 07:48:26 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbUserDepartment
 *
 * @property int $id
 * @property int $department_id
 * @property int $wdbuser_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserDepartment whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserDepartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserDepartment whereWdbuserId($value)
 * @mixin \Eloquent
 */
class WdbUserDepartment extends Eloquent
{
	protected $table = 'wdb_user_department';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'department_id' => 'int',
		'wdbuser_id' => 'int'
	];

	protected $fillable = [
		'department_id',
		'wdbuser_id'
	];
}
