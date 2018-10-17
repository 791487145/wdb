<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 29 Sep 2018 07:12:23 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\CompanyWdbShop
 *
 * @property int $id
 * @property int $company_id
 * @property int $shop_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\CompanyWdbShop whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\CompanyWdbShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\CompanyWdbShop whereShopId($value)
 * @mixin \Eloquent
 */
class CompanyWdbShop extends Eloquent
{
	protected $table = 'company_wdb_shop';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int',
		'shop_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'shop_id'
	];
}
