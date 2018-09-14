<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 14 Sep 2018 07:48:26 +0000.
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
 * @property string $title
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereSmsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Company extends Eloquent
{
	protected $table = 'company';
	protected $primaryKey = 'id';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'balance' => 'float',
		'sms_num' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'balance',
		'sms_num',
		'status',
		'title'
	];
}
