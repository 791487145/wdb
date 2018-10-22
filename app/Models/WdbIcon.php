<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbIcon
 *
 * @property int $id
 * @property string $category
 * @property string $icon
 * @property string $comment
 * @property int $company_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbIcon whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbIcon whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbIcon whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbIcon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbIcon whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbIcon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbIcon whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbIcon extends Eloquent
{
	protected $table = 'wdb_icon';
	protected $primaryKey = 'id';

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
