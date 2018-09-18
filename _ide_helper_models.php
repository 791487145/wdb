<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class Company
 *
 * @property int $id
 * @property string $name
 * @property float $balance
 * @property int $sms_num
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $status
 * @property string $title
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereSmsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUpdatedAt($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * Class OauthAccessToken
 *
 * @property string $id
 * @property int $user_id
 * @property int $client_id
 * @property string $name
 * @property string $scopes
 * @property bool $revoked
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $expires_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereUserId($value)
 */
	class OauthAccessToken extends \Eloquent {}
}

namespace App\Models{
/**
 * Class OauthAuthCode
 *
 * @property string $id
 * @property int $user_id
 * @property int $client_id
 * @property string $scopes
 * @property bool $revoked
 * @property \Carbon\Carbon $expires_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereUserId($value)
 */
	class OauthAuthCode extends \Eloquent {}
}

namespace App\Models{
/**
 * Class OauthClient
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $secret
 * @property string $redirect
 * @property bool $personal_access_client
 * @property bool $password_client
 * @property bool $revoked
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient wherePasswordClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient wherePersonalAccessClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereUserId($value)
 */
	class OauthClient extends \Eloquent {}
}

namespace App\Models{
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
 */
	class OauthPersonalAccessClient extends \Eloquent {}
}

namespace App\Models{
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
 */
	class OauthRefreshToken extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models{
/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * Class WdbDapartment
 *
 * @property int $id
 * @property string $department_name
 * @property string $describe
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $parent_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereDepartmentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbDapartment whereUpdatedAt($value)
 */
	class WdbDapartment extends \Eloquent {}
}

namespace App\Models{
/**
 * Class WdbMenu
 *
 * @property int $id
 * @property string $name
 * @property int $order
 * @property string $url
 * @property string $title
 * @property int $side
 * @property int $parent_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbMenu whereUrl($value)
 */
	class WdbMenu extends \Eloquent {}
}

namespace App\Models{
/**
 * Class WdbRole
 *
 * @property int $id
 * @property string $name
 * @property string $describe
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRole whereUpdatedAt($value)
 */
	class WdbRole extends \Eloquent {}
}

namespace App\Models{
/**
 * Class WdbRoleMenu
 *
 * @property int $id
 * @property int $role_id
 * @property int $menu_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRoleMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRoleMenu whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbRoleMenu whereRoleId($value)
 */
	class WdbRoleMenu extends \Eloquent {}
}

namespace App\Models{
/**
 * Class WdbUser
 *
 * @property int $id
 * @property string $name
 * @property string $nickname
 * @property string $mobile
 * @property string $work_no
 * @property int $department_id
 * @property int $shop_id
 * @property string $password
 * @property int $sex
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUser whereWorkNo($value)
 */
	class WdbUser extends \Eloquent {}
}

namespace App\Models{
/**
 * Class WdbUserDepartment
 *
 * @property int $id
 * @property int $department_id
 * @property int $wdbuser_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserDepartment whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserDepartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserDepartment whereWdbuserId($value)
 */
	class WdbUserDepartment extends \Eloquent {}
}

namespace App\Models{
/**
 * Class WdbUserRole
 *
 * @property int $id
 * @property int $role_id
 * @property int $user_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\WdbUserRole whereUserId($value)
 */
	class WdbUserRole extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * App\Modules\Wdb\Models\WdbDapartment
 *
 * @property int $id
 * @property string|null $department_name
 * @property string|null $describe
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereDepartmentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $parent_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbDapartment whereParentId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbUserDepartment[] $department_user_med
 */
	class WdbDapartment extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * Class WdbMenu
 *
 * @property int $id
 * @property string $name
 * @property int $order
 * @property string $url
 * @property string $title
 * @property int $side
 * @property int $parent_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbMenu whereUrl($value)
 * @mixin \Eloquent
 */
	class WdbMenu extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
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
 */
	class WdbRegisionManager extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * App\Modules\Wdb\Models\WdbRegisionManageShop
 *
 * @property int $id
 * @property int $regision_manage_id
 * @property int $shop_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManageShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManageShop whereRegisionManageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRegisionManageShop whereShopId($value)
 */
	class WdbRegisionManageShop extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * App\Modules\Wdb\Models\WdbRole
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $describe
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRole whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbUserRole[] $role_user
 */
	class WdbRole extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * App\Modules\Wdb\Models\WdbRoleMenu
 *
 * @property int $id
 * @property int $role_id
 * @property int $menu_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRoleMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRoleMenu whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbRoleMenu whereRoleId($value)
 * @mixin \Eloquent
 */
	class WdbRoleMenu extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * App\Modules\Wdb\Models\WdbShop
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $describe 描述
 * @property int $level 等级
 * @property string|null $experice 经验
 * @property string|null $fix_phone 固话
 * @property string|null $lon_lati 经纬度
 * @property int $shop_no 门店编码
 * @property string|null $district 区域
 * @property string|null $instro 要求
 * @property string|null $logo 店铺logo
 * @property int $status 1正常2禁用
 * @property int $is_recommend 0不推荐1推荐
 * @property string|null $bg_img 背景图
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $good_comment 好评率
 * @property int $sale_num 营销量
 * @property float $sale_money 营业额
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereBgImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereExperice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereFixPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereGoodComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereInstro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereIsRecommend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereLonLati($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereSaleMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereSaleNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereShopNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbShop whereUpdatedAt($value)
 */
	class WdbShop extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * App\Modules\Wdb\Models\WdbUser
 *
 * @property int $id
 * @property string|null $name 姓名
 * @property string|null $nickname 昵称
 * @property string $mobile 手机号
 * @property string $work_no 工号
 * @property int $department_id 部门
 * @property int $shop_id 店铺
 * @property string $password
 * @property int $status 1正常；2禁止
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereWorkNo($value)
 * @mixin \Eloquent
 * @property int|null $sex 1:男0女
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Wdb\Models\WdbRole[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUser whereSex($value)
 */
	class WdbUser extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * App\Modules\Wdb\Models\WdbUserDepartment
 *
 * @property int $id
 * @property int $department_id
 * @property int $wdbuser_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserDepartment whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserDepartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserDepartment whereWdbuserId($value)
 * @mixin \Eloquent
 */
	class WdbUserDepartment extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * App\Modules\Wdb\Models\WdbUserRegistionManage
 *
 * @property int $id
 * @property int $user_id
 * @property int $regision_manage_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRegistionManage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRegistionManage whereRegisionManageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRegistionManage whereUserId($value)
 */
	class WdbUserRegistionManage extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * Class WdbUserRole
 *
 * @property int $id
 * @property int $role_id
 * @property int $user_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserRole whereUserId($value)
 * @mixin \Eloquent
 */
	class WdbUserRole extends \Eloquent {}
}

namespace App\Modules\Wdb\Models{
/**
 * App\Modules\Wdb\Models\WdbUserShop
 *
 * @property int $id
 * @property int $shop_id
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserShop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserShop whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Wdb\Models\WdbUserShop whereUserId($value)
 */
	class WdbUserShop extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

