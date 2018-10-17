<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 29 Sep 2018 02:58:48 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbSundry
 *
 * @property int $id
 * @property string|null $sundryname 名称
 * @property string|null $sundrygroup 组
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbSundry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbSundry whereSundrygroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbSundry whereSundryname($value)
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

	static function getName($id)
    {
        $name = self::whereId($id)->value('sundryname');
        return $name;
    }

    static function selectAll($action)
    {
        if($action == 'members'){
            $data['sex'] = self::whereSundrygroup('sex')->select('id','sundryname')->get();
            $data['sourcemanner'] = self::whereSundrygroup('sourcemanner')->select('id','sundryname')->get();
            $data['buytimes'] = self::whereSundrygroup('order')->select('id','sundryname')->get();
        }

        return $data;
    }
}
