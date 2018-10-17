<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 09 Oct 2018 03:26:08 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbIcon
 *
 * @property int $id
 * @property string|null $category
 * @property string|null $icon
 * @property string|null $comment 备注
 * @property int $company_id 企业id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbIcon whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbIcon whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbIcon whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbIcon whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbIcon whereId($value)
 * @mixin \Eloquent
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbIcon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbIcon whereUpdatedAt($value)
 */
class WdbIcon extends Eloquent
{
	protected $table = 'wdb_icon';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'category',
		'icon',
		'comment',
		'company_id'
	];

}
