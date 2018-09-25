<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 09:09:37 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbGood
 *
 * @property int $id
 * @property string|null $name 商品名
 * @property int $goods_no 编号
 * @property int $sale_num 总销量
 * @property string|null $goods_describe 商品描述、卖点
 * @property string|null $thumbnail_pic 缩略图
 * @property int $group_id 分组
 * @property int $category_id 分类
 * @property int $data_time 上架时间
 * @property int $data_status 1立即上架；2自定义
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $goods_detail 商品详情
 * @property int $integral_status 积分抵扣1shi2fou
 * @property float $price 价格
 * @property int $repertory_num 库存
 * @property float $line_price 划线价
 * @property int $status 1上架2下架
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereDataStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereDataTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereGoodsDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereGoodsDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereGoodsNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereIntegralStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereLinePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereRepertoryNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereSaleNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereThumbnailPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbGood whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbGoodsExt[] $goodExts
 */
class WdbGood extends Eloquent
{
	protected $primaryKey = 'id';
	public $incrementing = true;

	const STATUS_UP = 1;//上架
	const STATUS_DOWN = 2;//下架

	protected $casts = [
		'id' => 'int',
		'goods_no' => 'int',
		'sale_num' => 'int',
		'group_id' => 'int',
		'category_id' => 'int',
		'data_time' => 'int',
		'data_status' => 'int',
		'integral_status' => 'int',
		'price' => 'float',
		'repertory_num' => 'int',
		'line_price' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'goods_no',
		'sale_num',
		'goods_describe',
		'thumbnail_pic',
		'group_id',
		'category_id',
		'data_time',
		'data_status',
		'goods_detail',
		'integral_status',
		'price',
		'repertory_num',
		'line_price',
		'status'
	];

	//商品规格
    public function assignGoodsExt($good_ext)
    {
        return $this->goodExts()->save($good_ext);
    }

    public function goodExts()
    {
        return $this->belongsToMany(WdbGoodsExt::class,'wdb_goods_goods_ext','goods_id','goods_ext_id');
    }

    public function deleteGoodExts($good_ext)
    {
        return $this->goodExts()->detach($good_ext);
    }

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

    //数据处理
    static function goods($request,$goods)
    {
        $name = $request->post('goods_name',0);
        if(!empty($name)){
            $goods = $goods->where('name','like','%'.$name.'%');
        }

        $price_low = $request->post('price_low',0);
        if(!empty($price_low)){
            $goods = $goods->where('price','>=',$price_low);
        }

        $price_up = $request->post('price_up',0);
        if(!empty($price_up)){
            $goods = $goods->where('price','<=',$price_up);
        }

        $goods_no = $request->post('goods_no','');
        if(!empty($goods_no)){
            $goods = $goods->whereGoodsNo($goods_no);
        }

        $category = $request->post('category_id','');
        if(!empty($category)){
            $goods = $goods->whereCategoryId($category);
        }

        $status = $request->post('status','');
        if(!empty($status)){
            $goods = $goods->whereStatus($status);
        }

        $goods = $goods->forPage($request->post('page',1),$request->post('limit',10))->select('id','name','thumbnail_pic','repertory_num','sale_num','created_at','status')->get();
        foreach ($goods as $good){
            $good->status_name = WdbGood::statusCN($good->status);
        }

        return $goods;
    }
}
