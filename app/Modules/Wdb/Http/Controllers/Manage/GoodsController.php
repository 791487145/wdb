<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\ConfCity;
use App\Modules\Wdb\Models\WdbGood;
use App\Modules\Wdb\Models\WdbGoodsCategory;
use App\Modules\Wdb\Models\WdbGoodsExt;
use App\Modules\Wdb\Models\WdbMenu;
use App\Modules\Wdb\Models\WdbRegisionManageShop;
use App\Modules\Wdb\Models\WdbShop;
use App\Modules\Wdb\Models\WdbUserShop;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Excel;

class GoodsController extends WdbController
{
    /**
     * 商品列表
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function goodsList(Request $request)
    {
        $goods = new WdbGood();
        $goods = WdbGood::goods($request,$goods);
        $data = array(
            'count' => count($goods),
            'goods' => $goods
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    /**
     * 商品添加
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function goodsCreate(Request $request)
    {
        DB::transaction(function () use($request){

            $goods = new WdbGood();
            $goods->name = $request->post('name');
            $goods->sale_num = 0;
            $goods->goods_describe = $request->post('goods_describe');
            $goods->thumbnail_pic = $request->post('thumbnail_pic');
            $goods->goods_detail = htmlspecialchars($request->post('goods_detail'));
            $goods->integral_status = $request->post('integral_status');
            $goods->price = $request->post('price');
            $goods->repertory_num = $request->post('repertory_num');
            $goods->line_price = $request->post('line_price',$this->pub);
            $goods->status = $request->post('status',$goods::STATUS_DOWN);
            $goods->group_id = $request->post('group_id');
            $goods->category_id = $request->post('category_id');
            $goods->save();

            $goods->goods_no = uniqid().'0'.$goods->id;
            $goods->save();

            $goods_exts = $request->post('goods_exts');
            if(!empty($goods_exts)){
                $goods_exts = json_decode($goods_exts,true);
                foreach ($goods_exts as $goods_ext){
                    $goods_ext_model = new WdbGoodsExt();
                    $goods_ext_model->goods_ext_name = $goods_ext['goods_ext_name'];
                    $goods_ext_model->price = $goods_ext['price'];
                    $goods_ext_model->repertory_num = $goods_ext['repertory_num'];
                    $goods_ext_model->cost_price = $goods_ext['cost_price'];
                    $goods_ext_model->sale_num = $this->pub;
                    $goods_ext_model->status = $request->post('status',$goods::STATUS_DOWN);
                    $goods_ext_model->save();

                    $goods_ext_model->goods_ext_no = $goods->goods_no.'000'.$goods_ext_model->id;
                    $goods_ext_model->save();

                    $goods->assignGoodsExt($goods_ext_model);
                }
            }

        });

        return $this->formatResponse('添加成功',$this->successStatus);
    }

    /**
     * 商品详情
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function goodsInfo(Request $request)
    {
        $good = WdbGood::whereId($request->post('good_id'))->first();
        $good->goods_exts = $good->goodExts;
        $good->goods_detail = html_entity_decode($good->goods_detail);

        return $this->formatResponse('获取成功',$this->successStatus,$good);
    }

    /**
     * 商品修改
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function goodsUpdate(Request $request)
    {
        $good = WdbGood::whereId($request->post('good_id'))->first();
        $good_exts = $good->goodExts;
        $exts = $request->post('goods_exts');

        $good_data = array(
            'name' => $request->post('name'),
            'goods_describe' => $request->post('goods_describe'),
            'thumbnail_pic' => $request->post('thumbnail_pic'),
            'goods_detail' => htmlspecialchars($request->post('goods_detail')),
            'integral_status' => $request->post('integral_status'),
            'price' => $request->post('price'),
            'repertory_num' => $request->post('repertory_num'),
            'line_price' => $request->post('line_price',$this->pub),
            'status' => $request->post('status',WdbGood::STATUS_DOWN),
            'group_id' => $request->post('group_id'),
            'category_id' => $request->post('category_id')
        );
        $good->update($good_data);

        if(!empty($exts)){
            foreach ($good_exts as $good_ext){
                $good->deleteGoodExts($good_exts);
                $good_ext->delete();
            }

            $exts = json_decode($exts,true);
            foreach ($exts as $ext){
                $goods_ext_model = new WdbGoodsExt();
                $goods_ext_model->goods_ext_name = $ext['goods_ext_name'];
                $goods_ext_model->price = $ext['price'];
                $goods_ext_model->repertory_num = $ext['repertory_num'];
                $goods_ext_model->cost_price = $ext['cost_price'];
                $goods_ext_model->sale_num = $this->pub;
                $goods_ext_model->status = $request->post('status',WdbGood::STATUS_DOWN);
                $goods_ext_model->save();

                $goods_ext_model->goods_ext_no = $good->goods_no.'000'.$goods_ext_model->id;
                $goods_ext_model->save();

                $good->assignGoodsExt($goods_ext_model);
            }
        }

        return $this->formatResponse('修改成功',$this->successStatus);
    }

    /**
     * 商品状态更改
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function goodsStatus(Request $request)
    {
        $good = WdbGood::whereId($request->post('good_id'))->first();
        $good->update(['status'=> $request->post('status')]);
        $good_exts = $good->goodExts();
        foreach ($good_exts as $good_ext){
            $good_ext->update(['status'=> $request->post('status')]);
        }

        return $this->formatResponse('修改成功',$this->successStatus);
    }

    /**
     * 商品类别列表
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function categoryList(Request $request)
    {
        $good_categorys = WdbGoodsCategory::forPage($request->post('page',1),$request->post('limit',10))->get();

        $data = array(
            'count' => count($good_categorys),
            'good_categorys' => $good_categorys
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    /**
     * 商品类别创建
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function categoryCreate(Request $request)
    {
        $category = new WdbGoodsCategory();
        $category->name = $request->post('name');
        $category->save();
        return $this->formatResponse('添加成功',$this->successStatus);
    }

    /**
     * 类别详情
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function categoryInfo(Request $request)
    {
        $category = WdbGoodsCategory::whereId($request->post('category_id'))->first();
        return $this->formatResponse('获取成功',$this->successStatus,$category);
    }

    /**
     * 类别修改
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function categoryUpdate(Request $request)
    {
        WdbGoodsCategory::whereId($request->post('category_id'))->update(['name' => $request->post('name')]);
        return $this->formatResponse('修改成功',$this->successStatus);
    }

    /**
     * 类别删除
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function categoryDelete(Request $request)
    {
        $goods = WdbGood::whereCategoryId($request->post('category_id'))->first();
        if(!is_null($goods)){
            return $this->formatResponse('该类别下有商品存在，不能删除',$this->errorStatus);
        }

        WdbGoodsCategory::whereId($request->post('category_id'))->delete();
        return $this->formatResponse('删除成功',$this->successStatus);
    }














}
