<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CompanyWdbShop
 *
 * @property int $id
 * @property int $company_id
 * @property int $shop_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbShop whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbShop whereShopId($value)
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
