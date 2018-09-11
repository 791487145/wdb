<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Sep 2018 02:48:28 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OauthPersonalAccessClient
 *
 * @property int $id
 * @property int $client_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OauthPersonalAccessClient extends Eloquent
{
	protected $primaryKey = 'id';

	protected $casts = [
		'client_id' => 'int'
	];

	protected $fillable = [
		'client_id'
	];
}
