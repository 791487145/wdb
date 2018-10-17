<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Sep 2018 08:05:46 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * App\Modules\Wdb\Models\WdbTag
 *
 * @property int $id
 * @property string|null $name
 * @property int $shopassistant_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbTag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbTag whereShopassistantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbTag whereUpdatedAt($value)
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
