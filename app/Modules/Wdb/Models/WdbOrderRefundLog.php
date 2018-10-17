<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 07:55:37 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbOrderRefundLog
 *
 * @property int $id
 * @property string|null $status
 * @property string|null $order_no
 * @property string|null $refund_no
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefundLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefundLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefundLog whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefundLog whereRefundNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefundLog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefundLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbOrderRefundLog extends Eloquent
{
	protected $table = 'wdb_order_refund_log';
	protected $primaryKey = 'id';

	protected $fillable = [
		'status',
		'order_no',
		'refund_no'
	];
}
