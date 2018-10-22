<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:07 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbUserDepartment
 *
 * @property int $id
 * @property int $department_id
 * @property int $wdbuser_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserDepartment whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserDepartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserDepartment whereWdbuserId($value)
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
