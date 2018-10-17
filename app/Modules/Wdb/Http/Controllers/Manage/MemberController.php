<?php

namespace App\Modules\Wdb\Http\Controllers\Manage;

use App\Modules\Wdb\Http\Controllers\WdbController;
use App\Modules\Wdb\Models\Company;
use App\Modules\Wdb\Models\CompanyWdbShop;
use App\Modules\Wdb\Models\ConfCity;
use App\Modules\Wdb\Models\WdbDegree;
use App\Modules\Wdb\Models\WdbGood;
use App\Modules\Wdb\Models\WdbGoodsCategory;
use App\Modules\Wdb\Models\WdbGoodsExt;
use App\Modules\Wdb\Models\WdbIcon;
use App\Modules\Wdb\Models\WdbMember;
use App\Modules\Wdb\Models\WdbMenberCardFinish;
use App\Modules\Wdb\Models\WdbMenu;
use App\Modules\Wdb\Models\WdbRegisionManager;
use App\Modules\Wdb\Models\WdbRegisionManageShop;
use App\Modules\Wdb\Models\WdbShop;
use App\Modules\Wdb\Models\WdbShopassistant;
use App\Modules\Wdb\Models\WdbSundry;
use App\Modules\Wdb\Models\WdbUserShop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Excel;
use Route;

class MemberController extends WdbController
{
    public function membersList(Request $request)
    {
        $members = new WdbMember();

        $name = $request->post('name','');
        if(!empty($name)){
            $members = $members->where('name','like','%'.$name.'%');
        }

        $phone = $request->post('phone','');
        if(!empty($phone)){
            $members = $members->wherePhone($phone);
        }

        $shopid = $request->post('shopid','');
        if(!empty($shopid)){
            $members = $members->whereShopId($shopid);
        }

        $sourcemanner = $request->post('sourcemanner','');
        if(!empty($sourcemanner)){
            $members = $members->whereSourcemanner($sourcemanner);
        }

        $buytimes = $request->post('buytimes',1);
        if($buytimes == $this->pub){
            $members = $members->orderBy('buytimes','asc');
        }else{
            $members = $members->orderBy('buytimes','desc');
        }

        $members = $members->forPage($request->post('page',$this->page),$request->post('limit',$this->limit))
                    ->select('id','name','sex','phone','shopid','buytimes','sourcemanner','birthday','vipLV')->get();

        foreach ($members as $member){
            $member->sex_name = WdbSundry::getName($member->sex);
            $member->shop_name = WdbShop::whereId($member->shopid)->value('name');
            $member->vipLV = WdbDegree::getName($member->vipLV);
            $member->sourcemanner_name = WdbSundry::getName($member->sourcemanner);
        }

        $select = WdbSundry::selectAll(Route::currentRouteName());
        $select['shop'] = Company::whereId($this->company_id)->first()->shop()->select('id','name')->get();
        $data = array(
            'select' => $select,
            'members' => $members
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    public function membersCreate(Request $request)
    {
        $mobile = $request->post('mobile','');
        if(empty($mobile)){
            return $this->formatResponse('请输入手机号',$this->errorStatus);
        }

        $member = WdbMember::wherePhone($mobile)->whereCompanyId($this->company_id)->first();
        if(!is_null($member)){
            return $this->formatResponse('该手机号已注册',$this->errorStatus);
        }

        $data2 = $request->all();
        $data1 = array(
            'addtime' => Carbon::now(),
            'modifytime' => Carbon::now(),
            'company_id' => $this->company_id
        );

        $data = array_merge($data1,$data2);
        WdbMember::create($data);
        return $this->formatResponse('添加成功');
    }

    public function membersCard(Request $request)
    {
        $card = Company::whereId($this->company_id)->first()->member_card()->first();
        $card->wy_order_ico_pic = WdbIcon::whereId($card->wy_order_ico)->value('icon');
        $card->wy_love_ico_pic = WdbIcon::whereId($card->wy_love_ico)->value('icon');
        $card->medicine_question_ico_pic = WdbIcon::whereId($card->medicine_question_ico)->value('icon');
        $card->my_data_ico_pic = WdbIcon::whereId($card->my_data_ico)->value('icon');
        $card->invite_price_ico_pic = WdbIcon::whereId($card->invite_price_ico)->value('icon');
        $card->all_shop_ico_pic = WdbIcon::whereId($card->all_shop_ico)->value('icon');

        return $this->formatResponse('获取成功',$this->successStatus,$card);
    }

    public function membersCardUpdate(Request $request)
    {
        $id = $request->post('card_id');
        $data = $request->except('card_id');

        WdbMenberCardFinish::whereId($id)->update($data);
        return $this->formatResponse('修改成功');
    }

    public function iconList(Request $request)
    {
        $icons = WdbIcon::whereCompanyId($this->company_id)
            ->forPage($request->post('page',$this->page),$request->post('limit',$this->limit))->get();

        $data = array(
            'icons' => $icons,
            'count' => count($icons)
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    public function iconCreate(Request $request)
    {
        $icon = new WdbIcon();
        $icon->company_id = $this->company_id;
        $icon->category = 'icon';
        $icon->icon = $request->post('icon');
        $icon->save();

        return $this->formatResponse('添加成功',$this->successStatus,$icon);
    }

    public function shopCodeList(Request $request)
    {
        $region_managers = WdbRegisionManager::whereCompanyId($this->company_id)->orderBy('id','asc')->get();
        $shop = new WdbShop();
        $company_shop_id = CompanyWdbShop::whereCompanyId($this->company_id)->pluck('shop_id');
        $shop = $shop->whereIn('id',$company_shop_id);

        $region_manage_id = $request->post('region_manage_id','');
        if(!empty($region_manage_id)){
            $shop_ids = WdbRegisionManageShop::whereRegisionManageId($region_manage_id)->pluck('shop_id');
            $shop = $shop->whereIn('id',$shop_ids);
        }

        $shop_name = $request->post('shop_name','');
        if(!empty($shop_name)){
            $shop = $shop->where('name','like','%'.$shop_name.'%');
        }

        $status = $request->post('status','');
        if(!empty($status)){
            $shop = $shop->whereStatus($status);
        }

        $shop = $shop->forPage($request->post('page',$this->page),$request->post('limit',$this->limit))
                 ->select('id','name','status','shop_no','qr_code')->get();

        foreach ($shop as $value){
            $value->status_name = WdbShop::statusCN($value->status);
            $region_manager = $value->shop_registion_manage()->first();
            $value->region_name = $region_manager->name;
        }

        $data = array(
            'shop' => $shop,
            'count' => count($shop),
            'region_managers' => $region_managers
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);
    }

    public function guideCodeList(Request $request)
    {
        $shops = Company::whereId($this->company_id)->first()->shop()->select('id','name')->get();
        foreach ($shops as $shop){
            $shop_ids[] = $shop->id;
        }

        $shop_assistents = new WdbShopassistant();

        $shop_id = $request->post('shop_id',$shop_ids[0]);
        $shop_assistents = $shop_assistents->whereShopid($shop_id);

        $jobnumber = $request->post('jobnumber','');
        if(!empty($jobnumber)){
            $shop_assistents = $shop_assistents->whereJobnumber($jobnumber);
        }

        $shop_assistents = $shop_assistents->forPage($request->post('page',$this->page),$request->post('limit',$this->limit))
                            ->select('id','assistantname','jobnumber','shopid','qr_code')->get();

        $data = array(
            'shop_assistents' => $shop_assistents,
            'count' => count($shop_assistents),
            'shops' => $shops
        );
        return $this->formatResponse('获取成功',$this->successStatus,$data);

    }













}
