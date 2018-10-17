<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Oct 2018 02:22:54 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbOrderLog
 *
 * @property int $id
 * @property int $order_no
 * @property int $status 1
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderLog whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderLog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbOrderLog whereUpdatedAt($value)
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
