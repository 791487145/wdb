<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Aug 2018 06:22:20 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;



/**
 * App\Modules\Wdb\Models\ConfCity
 *
 * @property int $id
 * @property string $name
 * @property string|null $zip_code
 * @property string $path
 * @property int $parent_id
 * @property \Carbon\Carbon $created
 * @property int $state
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\ConfCity whereCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\ConfCity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\ConfCity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\ConfCity whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\ConfCity wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\ConfCity whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\ConfCity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\ConfCity whereZipCode($value)
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

	static function getName($id)
    {
        $name = self::whereId($id)->value('name');
        return $name;
    }
}
