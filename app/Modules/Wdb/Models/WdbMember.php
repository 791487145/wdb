<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Sep 2018 08:05:46 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbMember
 *
 * @property int $id
 * @property string|null $openid
 * @property string|null $name
 * @property int $sex
 * @property string|null $phone
 * @property string|null $area 地域
 * @property int $sourcemanner 来源渠道
 * @property int $buytimes 购次
 * @property \Carbon\Carbon|null $birthday
 * @property int $vipLV 会员等级
 * @property int $amount_score 总积分
 * @property int $score 会员可用积分
 * @property float $amount 消费总金额
 * @property int $tag 会员标签
 * @property int $totalcoupons 优惠券总数量
 * @property int $totalcollection 收藏总数量
 * @property \Carbon\Carbon|null $addtime 增加时间
 * @property \Carbon\Carbon|null $modifytime 修改时间
 * @property int $shopassistantid 导购id
 * @property int $shopid 店铺id
 * @property string|null $head_img
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereAmountScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereBuytimes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereHeadImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereModifytime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereShopassistantid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereShopid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereSourcemanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereTotalcollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereTotalcoupons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereVipLV($value)
 * @mixin \Eloquent
 * @property int|null $company_id 企业id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMember whereCompanyId($value)
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
		'shopid' => 'int'
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
		'head_img'
	];
}
