<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Sep 2018 02:54:36 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbShop
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $describe 描述
 * @property int $level 等级
 * @property string|null $experice 经验
 * @property string|null $fix_phone 固话
 * @property string|null $lon_lati 经纬度
 * @property int $shop_no 门店编码
 * @property string|null $district 区域
 * @property string|null $instro 要求
 * @property string|null $logo 店铺logo
 * @property int $status 1正常2禁用
 * @property int $is_recommend 0不推荐1推荐
 * @property string|null $bg_img 背景图
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $good_comment 好评率
 * @property int $sale_num 营销量
 * @property float $sale_money 营业额
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereBgImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereExperice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereFixPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereGoodComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereInstro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereIsRecommend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereLonLati($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereSaleMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereSaleNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereShopNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $seo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbRegisionManager[] $shop_registion_manage
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbUser[] $shop_user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereSeo($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbShopassistant[] $shop_assistants
 */
class WdbShop extends Eloquent
{
	protected $table = 'wdb_shop';
	protected $primaryKey = 'id';

	const STATUS_NORMAL = 1;
	const STATUS_FORBBIN = 2;

	protected $casts = [
		'level' => 'int',
		'shop_no' => 'int',
		'status' => 'int',
		'is_recommend' => 'int',
		'sale_num' => 'int',
		'sale_money' => 'float'
	];

	protected $fillable = [
		'name',
		'describe',
		'level',
		'experice',
		'fix_phone',
		'lon_lati',
		'shop_no',
		'district',
		'instro',
		'logo',
		'status',
		'is_recommend',
		'bg_img',
		'good_comment',
		'sale_num',
		'sale_money'
	];

    /**
     * 用户
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function shop_user()
    {
        return $this->belongsToMany(WdbUser::class,'wdb_user_shop','shop_id','user_id');
    }

    //区域经理
    public function shop_registion_manage()
    {
        return $this->belongsToMany(WdbRegisionManager::class,'wdb_regision_manage_shop','shop_id','regision_manage_id');
    }

    //添加店长
    public function assignUser($user)
    {
        return $this->shop_user()->sync($user);
    }

    //添加区域
    public function assignRegision($regision)
    {
        return $this->shop_registion_manage()->sync($regision);
    }

    static function statusCN($status)
    {
        $param = array(
            self::STATUS_NORMAL => '正常',
            self::STATUS_FORBBIN => '禁用'
        );

        return $param[$status];
    }

    //删除店铺
    public function deleteShop($regision_manage){
        return $this->shop_registion_manage()->detach($regision_manage);
    }

    //店员
    public function shop_assistants()
    {
        return $this->hasMany(WdbShopassistant::class,'id','shopid');
    }
}
