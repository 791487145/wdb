<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbRole
 *
 * @property int $id
 * @property string $name
 * @property string $describe
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbRole extends Eloquent
{
	protected $table = 'wdb_role';
	protected $primaryKey = 'id';

	protected $fillable = [
		'name',
		'describe'
	];
}
