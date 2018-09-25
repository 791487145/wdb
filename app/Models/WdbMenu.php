<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 07:56:22 +0000.
 */

namespace App\Models;

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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereUrl($value)
 * @mixin \Eloquent
 */
class WdbMenu extends Eloquent
{
	protected $table = 'wdb_menu';
	protected $primaryKey = 'id';

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
