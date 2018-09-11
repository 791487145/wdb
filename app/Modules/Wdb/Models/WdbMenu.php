<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Sep 2018 02:48:28 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbMenu
 *
 * @property int $id
 * @property string|null $name 名称
 * @property string|null $url 链接
 * @property string|null $title 名称
 * @property int $side 层级
 * @property int $parent_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereName($value)
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

	protected $casts = [
		'side' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'name',
		'url',
		'title',
		'side',
		'parent_id'
	];
}
