<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 09 Oct 2018 03:26:08 +0000.
 */

namespace App\Modules\Wdb\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


/**
 * App\Modules\Wdb\Models\WdbMenberCardFinish
 *
 * @property int $id
 * @property string|null $bg_img 会员卡背景
 * @property int $lever_status 1显示2不显示等级
 * @property int $member_number_status 1会员卡号
 * @property string|null $function_status 功能模块1积分2储值3卡券
 * @property int $qr_code 1显示2不显示二维码
 * @property int $right_status 1显示2不显示权益展示
 * @property int $style_page 页面风格1经典2九宫格
 * @property int $wy_order 我的喜欢1展示
 * @property string|null $wy_order_ico 图标
 * @property int $wy_love
 * @property string|null $wy_love_ico
 * @property int $medicine_question
 * @property string|null $medicine_question_ico
 * @property int $my_data
 * @property string|null $my_data_ico
 * @property int $invite_price
 * @property string|null $invite_price_ico
 * @property int $all_shop
 * @property string|null $all_shop_ico
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereAllShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereAllShopIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereBgImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereFunctionStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereInvitePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereInvitePriceIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereLeverStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereMedicineQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereMedicineQuestionIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereMemberNumberStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereMyData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereMyDataIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereRightStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereStylePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereWyLove($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereWyLoveIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereWyOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenberCardFinish whereWyOrderIco($value)
 * @mixin \Eloquent
 */
class WdbMenberCardFinish extends Eloquent
{
	protected $table = 'wdb_menber_card_finish';
	protected $primaryKey = 'id';

	protected $casts = [
		'lever_status' => 'int',
		'member_number_status' => 'int',
		'qr_code' => 'int',
		'right_status' => 'int',
		'style_page' => 'int',
		'wy_order' => 'int',
		'wy_love' => 'int',
		'medicine_question' => 'int',
		'my_data' => 'int',
		'invite_price' => 'int',
		'all_shop' => 'int'
	];

	protected $fillable = [
		'bg_img',
		'lever_status',
		'member_number_status',
		'function_status',
		'qr_code',
		'right_status',
		'style_page',
		'wy_order',
		'wy_order_ico',
		'wy_love',
		'wy_love_ico',
		'medicine_question',
		'medicine_question_ico',
		'my_data',
		'my_data_ico',
		'invite_price',
		'invite_price_ico',
		'all_shop',
		'all_shop_ico'
	];
}
