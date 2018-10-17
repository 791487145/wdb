<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 09 Oct 2018 03:33:01 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\CompanyWdbMemberCard
 *
 * @property int $id
 * @property int $company_id
 * @property int $member_card_finish_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\CompanyWdbMemberCard whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\CompanyWdbMemberCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\CompanyWdbMemberCard whereMemberCardFinishId($value)
 * @mixin \Eloquent
 */
class CompanyWdbMemberCard extends Eloquent
{
	protected $table = 'company_wdb_member_card';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int',
		'member_card_finish_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'member_card_finish_id'
	];
}
