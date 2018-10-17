<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 29 Sep 2018 03:21:57 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbDegree
 *
 * @property int $id
 * @property string|null $name 名称
 * @property string|null $bg_img 背景图
 * @property int $experience 升级积分
 * @property int $company_id 企业id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDegree whereBgImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDegree whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDegree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDegree whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDegree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDegree whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDegree whereUpdatedAt($value)
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

    static function getName($id)
    {
        $name = self::whereId($id)->value('name');
        return $name;
    }


}
