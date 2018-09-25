<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 25 Sep 2018 07:56:22 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbShopGood
 *
 * @property int $id
 * @property int $good_id
 * @property int $shop_id
 * @property int $status
 * @property float $price
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopGood whereGoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopGood whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopGood wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopGood whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShopGood whereStatus($value)
 * @mixin \Eloquent
 */
class WdbShopGood extends Eloquent
{
	protected $primaryKey = 'id';
	public $timestamps = false;

    const STATUS_UP = 1;//上架
    const STATUS_DOWN = 2;//下架

    const IS_RECOMMENT = 1;//推荐
    const IS_NOT_RECOMMENT = 2;//不推荐

	protected $casts = [
		'good_id' => 'int',
		'shop_id' => 'int',
		'status' => 'int',
		'price' => 'float',
        'sale_num' => 'int'
	];

	protected $fillable = [
		'good_id',
		'shop_id',
		'status',
		'price',
        'sale_num'
	];


    /**
     * 状态名称
     * @param $status
     * @return mixed
     */
    static function statusCN($status)
    {
        $param = array(
            self::STATUS_UP => '上架',
            self::STATUS_DOWN => '下架'
        );
        return $param[$status];
    }
}
