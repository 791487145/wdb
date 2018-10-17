<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbDegree
 *
 * @property int $id
 * @property string $name
 * @property string $bg_img
 * @property int $experience
 * @property int $company_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDegree whereBgImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDegree whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDegree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDegree whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDegree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDegree whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDegree whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbDegree extends Eloquent
{
	protected $table = 'wdb_degree';
	protected $primaryKey = 'id';

	protected $casts = [
		'experience' => 'int',
		'company_id' => 'int'
	];

	protected $fillable = [
		'name',
		'bg_img',
		'experience',
		'company_id'
	];
}
