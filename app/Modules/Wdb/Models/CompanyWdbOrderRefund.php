<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * App\Modules\Wdb\Models\CompanyWdbOrderRefund
 *
 * @property int $id
 * @property int $company_id 公司id
 * @property int $order_refund_id 退款id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\CompanyWdbOrderRefund whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\CompanyWdbOrderRefund whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\CompanyWdbOrderRefund whereOrderRefundId($value)
 * @mixin \Eloquent
 */
class CompanyWdbOrderRefund extends Eloquent
{
	protected $table = 'company_wdb_order_refund';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int',
		'order_refund_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'order_refund_id'
	];
}
