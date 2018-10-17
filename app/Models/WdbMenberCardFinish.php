<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:13:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WdbMenberCardFinish
 *
 * @property int $id
 * @property string $bg_img
 * @property int $lever_status
 * @property int $member_number_status
 * @property string $function_status
 * @property int $qr_code
 * @property int $right_status
 * @property int $style_page
 * @property int $wy_order
 * @property int $wy_order_ico
 * @property int $wy_love
 * @property int $wy_love_ico
 * @property int $medicine_question
 * @property int $medicine_question_ico
 * @property int $my_data
 * @property string $my_data_ico
 * @property int $invite_price
 * @property string $invite_price_ico
 * @property int $all_shop
 * @property string $all_shop_ico
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereAllShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereAllShopIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereBgImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereFunctionStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereInvitePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereInvitePriceIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereLeverStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereMedicineQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereMedicineQuestionIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereMemberNumberStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereMyData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereMyDataIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereRightStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereStylePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereWyLove($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereWyLoveIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereWyOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenberCardFinish whereWyOrderIco($value)
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
		'wy_order_ico' => 'int',
		'wy_love' => 'int',
		'wy_love_ico' => 'int',
		'medicine_question' => 'int',
		'medicine_question_ico' => 'int',
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
