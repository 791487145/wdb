<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('wdb/manage')->group(function () {


        Route::namespace('Manage')->group(function () {

            Route::post('user', 'ManageController@userList')->name('user');
            Route::post('user/create', 'ManageController@userCreate')->name('userCreate');
            //Route::post('user/delete', 'ManageController@userDelete')->name('userDelete');
            Route::post('user/info', 'ManageController@userInfo')->name('userInfo');
            Route::post('user/update', 'ManageController@userUpdate')->name('userUpdate');
            Route::post('user/passwordReset', 'ManageController@passwordReset')->name('passwordReset');

            Route::post('role', 'RoleController@roleList')->name('role');
            Route::post('role/create', 'RoleController@roleCreate')->name('roleCreate');
            Route::post('role/update', 'RoleController@roleUpdate')->name('roleUpdate');
            Route::post('role/info', 'RoleController@roleInfo')->name('roleInfo');
            Route::post('role/delete', 'RoleController@roleDelete')->name('roleDelete');
            Route::post('role/assignPermission', 'RoleController@assignPermission')->name('assignPermission');
            Route::post('role/permissionList', 'RoleController@permissionList')->name('permissionList');

            Route::post('permission', 'PermissionController@permissionList')->name('permission');
            //Route::post('permission/create', 'PermissionController@permissionCreate')->name('permissionCreate');
            //Route::post('permission/delete', 'PermissionController@permissionDelete')->name('permissionDelete');
            Route::post('permission/info', 'PermissionController@permissionInfo')->name('permissionInfo');
            Route::post('permission/update', 'PermissionController@permissionUpdate')->name('permissionUpdate');


            Route::post('set/department', 'SettingController@departmentList')->name('department');
            Route::post('set/department/create', 'SettingController@departmentCreate')->name('departmentCreate');
            Route::post('set/department/delete', 'ManageController@departmentDelete')->name('departmentDelete');
            Route::post('set/department/info', 'SettingController@departmentInfo')->name('departmentInfo');
            Route::post('set/department/update', 'SettingController@departmentUpdate')->name('departmentUpdate');

            Route::post('set/regision', 'SettingController@regisionList')->name('regision');
            Route::post('set/regision/create', 'SettingController@regisionCreate')->name('regisionCreate');
            Route::post('set/regision/delete', 'ManageController@regisionDelete')->name('regisionDelete');
            Route::post('set/regision/info', 'SettingController@regisionInfo')->name('regisionInfo');
            Route::post('set/regision/update', 'SettingController@regisionUpdate')->name('regisionUpdate');

            Route::post('shop', 'ShopController@shopList')->name('shop');
            Route::post('shop/create', 'ShopController@shopCreate')->name('shopCreate');
            Route::post('shop/delete', 'ShopController@shopDelete')->name('shopDelete');
            Route::post('shop/info', 'ShopController@shopInfo')->name('shopInfo');
            Route::post('shop/update', 'ShopController@shopUpdate')->name('shopUpdate');

            Route::post('shop/good', 'ShopController@goodsList')->name('shopGoods');
            Route::post('shop/good/recommend', 'ShopController@goodsRecommend')->name('goodsRecommend');
            Route::post('shop/good/status', 'ShopController@goodsStatus')->name('shopGoodStatus');
            Route::post('shop/good/info', 'ShopController@goodInfo')->name('shopGoodInfo');
            Route::post('shop/good/update', 'ShopController@goodUpdate')->name('shopGoodUpdate');
            Route::post('shop/good/assignGoods', 'ShopController@shopAssignGoods')->name('shopAssignGoods');
            Route::post('shop/good/create', 'ShopController@shopGoodCreate')->name('shopGoodCreate');


            Route::post('goods', 'GoodsController@goodsList')->name('goods');
            Route::post('goods/create', 'GoodsController@goodsCreate')->name('goodsCreate');
            Route::post('goods/status', 'GoodsController@goodsStatus')->name('goodsStatus');
            Route::post('goods/info', 'GoodsController@goodsInfo')->name('goodsInfo');
            Route::post('goods/update', 'GoodsController@goodsUpdate')->name('goodsUpdate');

            Route::post('goods/category', 'GoodsController@categoryList')->name('category');
            Route::post('goods/category/create', 'GoodsController@categoryCreate')->name('categoryCreate');
            Route::post('goods/category/delete', 'GoodsController@categoryDelete')->name('categoryDelete');
            Route::post('goods/category/info', 'GoodsController@categoryInfo')->name('categoryInfo');
            Route::post('goods/category/update', 'GoodsController@categoryUpdate')->name('categoryUpdate');

            Route::post('members', 'MemberController@membersList')->name('members');
            Route::post('members/create', 'MemberController@membersCreate')->name('membersCreate');
            Route::post('members/card', 'MemberController@membersCard')->name('membersCard');
            Route::post('members/card/update', 'MemberController@membersCardUpdate')->name('membersCardUpdate');

            Route::post('icon', 'MemberController@iconList')->name('icons');
            Route::post('icon/create', 'MemberController@iconCreate')->name('iconCreate');

            Route::post('shop/code', 'MemberController@shopCodeList')->name('shopCodeList');
            Route::post('guide/code', 'MemberController@guideCodeList')->name('guideCodeList');

            Route::post('orders', 'OrderController@ordersList')->name('orders');
            Route::post('orders/info', 'OrderController@ordersInfo')->name('ordersInfo');
            Route::post('orders/shipments', 'OrderController@orderShipments')->name('orderShipments');
            Route::post('orders/evaluate', 'OrderController@orderEvaluate')->name('orderEvaluate');

            Route::post('refunds', 'RefundController@refundsList')->name('refunds');
            Route::post('refunds/info', 'RefundController@refundsInfo')->name('refundsInfo');
            Route::post('refunds/shipments', 'RefundController@orderShipments')->name('orderShipments');

            Route::post('aaa', 'ShopController@aaa')->name('aaa');
            Route::get('bbb', 'ShopController@bbb')->name('bbb');
            Route::post('test', 'TestController@test')->name('test');
        });

});
