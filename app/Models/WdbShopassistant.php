<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:07 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbShopassistant
 *
 * @property int $assistantid
 * @property string $jobnumber
 * @property string $assistantname
 * @property bool $assistantsex
 * @property int $assistantage
 * @property string $assistantphone
 * @property bool $ifonjob
 * @property int $departmentid
 * @property string $roleid
 * @property \Carbon\Carbon $addtime
 * @property int $shopid
 * @property string $openid
 * @property string $signature
 * @property string $headphoto
 * @property int $fansnum
 * @property int $membernum
 * @property float $totalsales
 * @property string $nickname
 * @property string $qr_code
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereAssistantage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereAssistantid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereAssistantname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereAssistantphone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereAssistantsex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereDepartmentid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereFansnum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereHeadphoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereIfonjob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereJobnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereMembernum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereRoleid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereShopid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShopassistant whereTotalsales($value)
 * @mixin \Eloquent
 */
class WdbShopassistant extends Eloquent
{
	protected $table = 'wdb_shopassistant';
	protected $primaryKey = 'assistantid';
	public $timestamps = false;

	protected $casts = [
		'assistantsex' => 'bool',
		'assistantage' => 'int',
		'ifonjob' => 'bool',
		'departmentid' => 'int',
		'shopid' => 'int',
		'fansnum' => 'int',
		'membernum' => 'int',
		'totalsales' => 'float'
	];

	protected $dates = [
		'addtime'
	];

	protected $fillable = [
		'jobnumber',
		'assistantname',
		'assistantsex',
		'assistantage',
		'assistantphone',
		'ifonjob',
		'departmentid',
		'roleid',
		'addtime',
		'shopid',
		'openid',
		'signature',
		'headphoto',
		'fansnum',
		'membernum',
		'totalsales',
		'nickname',
		'qr_code'
	];
}
