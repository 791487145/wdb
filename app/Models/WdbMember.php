<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbMember
 *
 * @property int $id
 * @property string $openid
 * @property string $name
 * @property int $sex
 * @property string $phone
 * @property string $area
 * @property int $sourcemanner
 * @property int $buytimes
 * @property \Carbon\Carbon $birthday
 * @property int $vipLV
 * @property int $amount_score
 * @property int $score
 * @property float $amount
 * @property int $tag
 * @property int $totalcoupons
 * @property int $totalcollection
 * @property \Carbon\Carbon $addtime
 * @property \Carbon\Carbon $modifytime
 * @property int $shopassistantid
 * @property int $shopid
 * @property string $head_img
 * @property int $company_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereAmountScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereBuytimes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereHeadImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereModifytime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereShopassistantid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereShopid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereSourcemanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereTotalcollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereTotalcoupons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMember whereVipLV($value)
 * @mixin \Eloquent
 */
class WdbMember extends Eloquent
{
	protected $table = 'wdb_member';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'sex' => 'int',
		'sourcemanner' => 'int',
		'buytimes' => 'int',
		'vipLV' => 'int',
		'amount_score' => 'int',
		'score' => 'int',
		'amount' => 'float',
		'tag' => 'int',
		'totalcoupons' => 'int',
		'totalcollection' => 'int',
		'shopassistantid' => 'int',
		'shopid' => 'int',
		'company_id' => 'int'
	];

	protected $dates = [
		'birthday',
		'addtime',
		'modifytime'
	];

	protected $fillable = [
		'openid',
		'name',
		'sex',
		'phone',
		'area',
		'sourcemanner',
		'buytimes',
		'birthday',
		'vipLV',
		'amount_score',
		'score',
		'amount',
		'tag',
		'totalcoupons',
		'totalcollection',
		'addtime',
		'modifytime',
		'shopassistantid',
		'shopid',
		'head_img',
		'company_id'
	];
}
