<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 06:54:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbOrderLog
 *
 * @property int $id
 * @property int $order_no
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderLog whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderLog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbOrderLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WdbOrderLog extends Eloquent
{
	protected $table = 'wdb_order_log';
	protected $primaryKey = 'id';

	protected $casts = [
		'order_no' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'order_no',
		'status'
	];
}
