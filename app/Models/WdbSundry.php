<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbSundry
 *
 * @property int $id
 * @property string $sundryname
 * @property string $sundrygroup
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbSundry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbSundry whereSundrygroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbSundry whereSundryname($value)
 * @mixin \Eloquent
 */
class WdbSundry extends Eloquent
{
	protected $table = 'wdb_sundry';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $fillable = [
		'sundryname',
		'sundrygroup'
	];
}
