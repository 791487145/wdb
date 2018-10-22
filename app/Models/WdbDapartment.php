<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbDapartment
 *
 * @property int $id
 * @property string $department_name
 * @property string $describe
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $parent_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereDepartmentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbDapartment extends Eloquent
{
	protected $table = 'wdb_dapartment';
	protected $primaryKey = 'id';

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'department_name',
		'describe',
		'parent_id'
	];
}
