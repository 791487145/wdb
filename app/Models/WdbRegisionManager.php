<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 07:56:22 +0000.
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
 * @package App\Models
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

	protected $fillable = [
		'mobile',
		'name',
		'describe'
	];
}
