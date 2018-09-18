<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Sep 2018 09:13:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ConfCity
 *
 * @property int $id
 * @property string $name
 * @property string $zip_code
 * @property string $path
 * @property int $parent_id
 * @property \Carbon\Carbon $created
 * @property int $state
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ConfCity whereCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ConfCity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ConfCity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ConfCity whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ConfCity wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ConfCity whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ConfCity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ConfCity whereZipCode($value)
 * @mixin \Eloquent
 */
class ConfCity extends Eloquent
{
	protected $table = 'conf_city';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'state' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'name',
		'zip_code',
		'path',
		'parent_id',
		'created',
		'state'
	];
}
