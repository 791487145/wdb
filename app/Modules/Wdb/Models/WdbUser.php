<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Sep 2018 02:48:28 +0000.
 */

namespace App\Modules\Wdb\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * App\Modules\Wdb\Models\WdbUser
 *
 * @property int $id
 * @property string|null $name 姓名
 * @property string|null $nickname 昵称
 * @property string $mobile 手机号
 * @property string $work_no 工号
 * @property int $department_id 部门
 * @property int $shop_id 店铺
 * @property string $password
 * @property int $status 1正常；2禁止
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereWorkNo($value)
 * @mixin \Eloquent
 */
class WdbUser extends Authenticatable
{
    use Notifiable,HasApiTokens;

	protected $table = 'wdb_user';
	protected $primaryKey = 'id';

	protected $casts = [
		'department_id' => 'int',
		'shop_id' => 'int',
		'status' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'nickname',
		'mobile',
		'work_no',
		'department_id',
		'shop_id',
		'password',
		'status'
	];

    public function assignRole($roles){
        return $this->roles()->sync($roles);
    }

    public function roles(){
        return $this->belongsToMany(WdbRole::class,'wdb_user_role','user_id','role_id');
    }
}
