<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OauthRefreshToken
 *
 * @property string $id
 * @property string $access_token_id
 * @property bool $revoked
 * @property \Carbon\Carbon $expires_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereAccessTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereRevoked($value)
 * @mixin \Eloquent
 */
class OauthRefreshToken extends Eloquent
{
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'revoked' => 'bool'
	];

	protected $dates = [
		'expires_at'
	];

	protected $fillable = [
		'access_token_id',
		'revoked',
		'expires_at'
	];
}
