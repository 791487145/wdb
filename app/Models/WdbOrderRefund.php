<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbOrderRefund
 *
 * @property int $id
 * @property string $refund_no
 * @property int $member_id
 * @property string $order_no
 * @property int $refund_way
 * @property float $refund_money
 * @property float $actual_refund_number
 * @property string $comment
 * @property string $refund_file
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereActualRefundNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereRefundFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereRefundMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereRefundNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereRefundWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderRefund whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbOrderRefund extends Eloquent
{
	protected $table = 'wdb_order_refund';
	protected $primaryKey = 'id';

	protected $casts = [
		'member_id' => 'int',
		'refund_way' => 'int',
		'refund_money' => 'float',
		'actual_refund_number' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'refund_no',
		'member_id',
		'order_no',
		'refund_way',
		'refund_money',
		'actual_refund_number',
		'comment',
		'refund_file',
		'status'
	];
}
