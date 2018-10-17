<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 07:55:37 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * App\Modules\Wdb\Models\WdbOrderRefund
 *
 * @property int $id
 * @property string|null $refund_no 退款编号
 * @property int $member_id 发起者
 * @property string|null $order_no 订单编号
 * @property int $refund_way 1仅退款；2退款退货
 * @property float $refund_money 退款金额
 * @property float $actual_refund_number 实际退款金额
 * @property string|null $comment 退款备注
 * @property string|null $refund_file 退款附件
 * @property int $status 状态1申请中2等待买家发货3拒绝4完成
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereActualRefundNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereRefundFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereRefundMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereRefundNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereRefundWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderRefund whereUpdatedAt($value)
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
