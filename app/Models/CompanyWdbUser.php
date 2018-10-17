<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CompanyWdbUser
 *
 * @property int $id
 * @property int $company_id
 * @property int $wdb_user_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbUser whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbUser whereWdbUserId($value)
 * @mixin \Eloquent
 */
class CompanyWdbUser extends Eloquent
{
	protected $table = 'company_wdb_user';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int',
		'wdb_user_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'wdb_user_id'
	];
}
