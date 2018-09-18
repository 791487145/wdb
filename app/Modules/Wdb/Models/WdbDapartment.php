<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Sep 2018 02:48:28 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbDapartment
 *
 * @property int $id
 * @property string|null $department_name
 * @property string|null $describe
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereDepartmentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $parent_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereParentId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbUserDepartment[] $department_user_med
 */
class WdbDapartment extends Eloquent
{
	protected $table = 'wdb_dapartment';
	protected $primaryKey = 'id';

	protected $fillable = [
		'department_name',
		'describe'
	];

	public function department_user_med()
    {
        return $this->hasMany(WdbUserDepartment::class,'department_id','id');
    }
}
