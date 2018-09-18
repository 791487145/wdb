<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Sep 2018 09:13:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Company
 *
 * @property int $id
 * @property string $name
 * @property float $balance
 * @property int $sms_num
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $status
 * @property string $category
 * @property int $main_certification
 * @property string $district
 * @property string $logo
 * @property string $telphone
 * @property string $seo
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereMainCertification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereSmsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereTelphone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Company extends Eloquent
{
	protected $table = 'company';
	protected $primaryKey = 'id';

	protected $casts = [
		'balance' => 'float',
		'sms_num' => 'int',
		'status' => 'int',
		'main_certification' => 'int'
	];

	protected $fillable = [
		'name',
		'balance',
		'sms_num',
		'status',
		'category',
		'main_certification',
		'district',
		'logo',
		'telphone',
		'seo'
	];
}
