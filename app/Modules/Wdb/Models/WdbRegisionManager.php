<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 18 Sep 2018 02:54:36 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * App\Modules\Wdb\Models\WdbRegisionManager
 *
 * @property int $id
 * @property string|null $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManager whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManager whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManager whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $mobile
 * @property string|null $describe
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManager whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManager whereMobile($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbShop[] $shops
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbUser[] $user
 */
class WdbRegisionManager extends Eloquent
{
	protected $table = 'wdb_regision_manager';
	protected $primaryKey = 'id';

	protected $fillable = [
		'name'
	];

	public function user()
    {
        return $this->belongsToMany(WdbUser::class,'wdb_user_registion_manage','regision_manage_id','user_id');
    }

    public function shops()
    {
        return $this->belongsToMany(WdbShop::class,'wdb_regision_manage_shop','regision_manage_id','shop_id');
    }

    public function assigeUser($user){
        return $this->user()->sync($user);
    }

    public function assigeShop($shop){
        return $this->shops()->sync($shop);
    }

    public function deleteUser($user)
    {
        return $this->user()->detach($user);
    }

    public function deleteShop($shop)
    {
        return $this->shops()->detach($shop);
    }
}
