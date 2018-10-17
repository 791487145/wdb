<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbOrderOrderlog
 *
 * @property int $id
 * @property int $order_id
 * @property int $order_log_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderOrderlog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderOrderlog whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderOrderlog whereOrderLogId($value)
 * @mixin \Eloquent
 */
class WdbOrderOrderlog extends Eloquent
{
	protected $table = 'wdb_order_orderlog';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'order_log_id' => 'int'
	];

	protected $fillable = [
		'order_id',
		'order_log_id'
	];
}
