<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbRegisionManager
 *
 * @property int $id
 * @property string $mobile
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $describe
 * @property int $company_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManager whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManager whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManager whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManager whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManager whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRegisionManager whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbRegisionManager extends Eloquent
{
	protected $table = 'wdb_regision_manager';
	protected $primaryKey = 'id';

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'mobile',
		'name',
		'describe',
		'company_id'
	];
}
