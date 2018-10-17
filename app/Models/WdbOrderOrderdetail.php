<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbOrderOrderdetail
 *
 * @property int $id
 * @property int $order_id
 * @property int $order_detail_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderOrderdetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderOrderdetail whereOrderDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderOrderdetail whereOrderId($value)
 * @mixin \Eloquent
 */
class WdbOrderOrderdetail extends Eloquent
{
	protected $table = 'wdb_order_orderdetail';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'order_detail_id' => 'int'
	];

	protected $fillable = [
		'order_id',
		'order_detail_id'
	];
}
