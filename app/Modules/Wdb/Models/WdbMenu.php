<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 14 Sep 2018 05:42:27 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbMenu
 *
 * @property int $id
 * @property string $name
 * @property int $order
 * @property string $url
 * @property string $title
 * @property int $side
 * @property int $parent_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereUrl($value)
 * @mixin \Eloquent
 */
class WdbMenu extends Eloquent
{
	protected $table = 'wdb_menu';
	protected $primaryKey = 'id';

	const SIDE_MENU = 0;

	protected $casts = [
		'order' => 'int',
		'side' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'name',
		'order',
		'url',
		'title',
		'side',
		'parent_id'
	];
}
