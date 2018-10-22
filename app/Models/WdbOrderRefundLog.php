<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbOrderRefundLog
 *
 * @property int $id
 * @property string $status
 * @property string $order_no
 * @property string $refund_no
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefundLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefundLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefundLog whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefundLog whereRefundNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefundLog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefundLog whereUpdatedAt($value)
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
