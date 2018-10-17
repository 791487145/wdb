<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 11 Oct 2018 08:21:52 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbOrderOrderdetail
 *
 * @property int $id
 * @property int $order_id
 * @property int $order_detail_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderOrderdetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderOrderdetail whereOrderDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderOrderdetail whereOrderId($value)
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
