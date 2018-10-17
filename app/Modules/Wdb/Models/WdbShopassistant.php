<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Sep 2018 07:26:23 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbShopassistant
 *
 * @property int $assistantid 主键
 * @property string|null $jobnumber 工号
 * @property string|null $assistantname 员工姓名
 * @property int $assistantsex 性别
 * @property int $assistantage 员工年龄
 * @property string|null $assistantphone 员工手机
 * @property int $ifonjob 1在职  -1离职
 * @property int $departmentid 部门id
 * @property string|null $roleid 角色id
 * @property \Carbon\Carbon|null $addtime 入职时间
 * @property int $shopid 店铺id
 * @property string|null $openid openid
 * @property string|null $signature 签名
 * @property string|null $headphoto 头像
 * @property int $fansnum 粉丝总数
 * @property int $membernum 会员总数
 * @property float $totalsales 销售总额
 * @property string|null $nickname 昵称
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereAssistantage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereAssistantid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereAssistantname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereAssistantphone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereAssistantsex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereDepartmentid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereFansnum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereHeadphoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereIfonjob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereJobnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereMembernum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereRoleid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereShopid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereTotalsales($value)
 * @mixin \Eloquent
 * @property string|null $qr_code 二维码
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopassistant whereQrCode($value)
 */
class WdbShopassistant extends Eloquent
{
	protected $table = 'wdb_shopassistant';
	protected $primaryKey = 'assistantid';
	public $timestamps = false;

	protected $casts = [
		'assistantsex' => 'int',
		'assistantage' => 'int',
		'ifonjob' => 'int',
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
		'nickname'
	];
}
