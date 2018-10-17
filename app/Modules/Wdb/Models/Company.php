<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 29 Sep 2018 03:21:57 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\Company
 *
 * @property int $id
 * @property string|null $name 品牌名
 * @property float $balance 余额
 * @property int $sms_num 短信数目
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $status 1正常；2禁止
 * @property string|null $category 类别
 * @property int $main_certification 主体认证0未1已认证
 * @property string|null $district 地址
 * @property string|null $logo
 * @property string|null $telphone
 * @property string|null $seo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereMainCertification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereSmsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereTelphone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\Company whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbShop[] $shop
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbMenberCardFinish[] $member_card
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

	//所有门店
	public function shop()
    {
        return $this->belongsToMany(WdbShop::class,'company_wdb_shop','company_id','shop_id');
    }

    //所有会员卡
    public function member_card()
    {
        return $this->belongsToMany(WdbMenberCardFinish::class,'company_wdb_member_card','company_id','member_card_finish_id');
    }
}
