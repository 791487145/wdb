<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CompanyWdbMemberCard
 *
 * @property int $id
 * @property int $company_id
 * @property int $member_card_finish_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbMemberCard whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbMemberCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyWdbMemberCard whereMemberCardFinishId($value)
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
