<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 07:56:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbUser
 *
 * @property int $id
 * @property string $name
 * @property string $nickname
 * @property string $mobile
 * @property string $work_no
 * @property int $department_id
 * @property int $shop_id
 * @property string $password
 * @property int $sex
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereWorkNo($value)
 * @mixin \Eloquent
 */
class WdbUser extends Eloquent
{
	protected $table = 'wdb_user';
	protected $primaryKey = 'id';

	protected $casts = [
		'department_id' => 'int',
		'shop_id' => 'int',
		'sex' => 'int',
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
		'sex',
		'status'
	];
}
