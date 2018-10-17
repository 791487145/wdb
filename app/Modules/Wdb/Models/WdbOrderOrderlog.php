<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Oct 2018 02:22:54 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbOrderOrderlog
 *
 * @property int $id
 * @property int $order_id
 * @property int $order_log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderOrderlog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderOrderlog whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderOrderlog whereOrderLogId($value)
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
