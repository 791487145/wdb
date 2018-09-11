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

        });

});
