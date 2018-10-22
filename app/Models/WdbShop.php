<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:07 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbShop
 *
 * @property int $id
 * @property string $name
 * @property string $describe
 * @property int $level
 * @property string $experice
 * @property string $fix_phone
 * @property string $lon_lati
 * @property int $shop_no
 * @property string $district
 * @property string $instro
 * @property string $logo
 * @property bool $status
 * @property int $is_recommend
 * @property string $bg_img
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $good_comment
 * @property int $sale_num
 * @property float $sale_money
 * @property int $company_id
 * @property string $seo
 * @property string $qr_code
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereBgImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereExperice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereFixPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereGoodComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereInstro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereIsRecommend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereLonLati($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereSaleMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereSaleNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereShopNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbShop whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbShop extends Eloquent
{
	protected $table = 'wdb_shop';
	protected $primaryKey = 'id';

	protected $casts = [
		'level' => 'int',
		'shop_no' => 'int',
		'status' => 'bool',
		'is_recommend' => 'int',
		'sale_num' => 'int',
		'sale_money' => 'float',
		'company_id' => 'int'
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
		'sale_money',
		'company_id',
		'seo',
		'qr_code'
	];
}
