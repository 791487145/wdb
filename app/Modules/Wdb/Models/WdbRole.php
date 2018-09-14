<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Sep 2018 02:48:28 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbRole
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $describe
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbUserRole[] $role_user
 */
class WdbRole extends Eloquent
{
	protected $table = 'wdb_role';
	protected $primaryKey = 'id';

	protected $fillable = [
		'name',
		'describe'
	];

    public function role_user()
    {
        return $this->hasMany(WdbUserRole::class,'role_id','id');
    }
}
