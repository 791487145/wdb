<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:07 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbTag
 *
 * @property int $id
 * @property string $name
 * @property int $shopassistant_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbTag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbTag whereShopassistantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbTag extends Eloquent
{
	protected $table = 'wdb_tag';
	protected $primaryKey = 'id';

	protected $casts = [
		'shopassistant_id' => 'int'
	];

	protected $fillable = [
		'name',
		'shopassistant_id'
	];
}
