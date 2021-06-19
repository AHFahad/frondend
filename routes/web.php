<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('login');
}); */

//admin

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
Route::get('/adminHome', 'AdminHomeController@index')->name('adminHome');
Route::get('/adminEditProfile', 'AdminHomeController@editProfile')->name('adminEditProfile');
Route::get('/adminViewAllUserInfo', 'AdminHomeController@viewAllUserInfo')->name('adminViewAllUserInfo');
Route::get('/adminViewAllTransaction', 'AdminHomeController@viewAllTransaction')->name('adminViewAllTransaction');
Route::get('/adminUserReports', 'AdminHomeController@userReports')->name('adminUserReports');
Route::get('/adminAnnouncement', 'AdminHomeController@announcement')->name('adminAnnouncement');
Route::get('/adminEditUserInfo', 'AdminHomeController@editUserInfo')->name('adminEditUserInfo');

// seller

Route::get('/seller/home','SellerController@home')->name('seller.home');
Route::get('/seller/applyforprimeseller','SellerController@applyForPrimeSeller')->name('seller.apply.prime');
Route::get('/seller/createsellpost','SellerController@createSellPost')->name('seller.create.sell.post');
Route::get('/seller/myposts','SellerController@myPosts')->name('seller.posts');
Route::get('/seller/statements','SellerController@statements')->name('seller.statements');
Route::get('/seller/orders','SellerController@orders')->name('seller.orders');
Route::get('/seller/contactsupport','SellerController@contactSupport')->name('seller.contact.support');
Route::get('/seller/orderdetails','SellerController@orderDetails')->name('seller.order.details');
Route::get('/seller/editsellpost','SellerController@editSellPost')->name('seller.edit.sell.post');
Route::get('/seller/editprofile','SellerController@editProfile')->name('seller.edit.profile');
Route::get('/seller/statementdetails','SellerController@statementDetails')->name('seller.statement.details');



// user or buyer
Route::get('/user/Home', [App\Http\Controllers\UserController::class,'index']);

Route::get('/user/editProfile', [App\Http\Controllers\UserController::class,'edit']);

Route::get('/user/history', [App\Http\Controllers\UserController::class,'history']);

Route::get('/user/register', [App\Http\Controllers\UserController::class,'register']);

Route::get('/user/detailsHistory', [App\Http\Controllers\UserController::class,'detailsHistory'])->name('detailsOrder');
Route::get('/user/follow', [App\Http\Controllers\UserController::class,'follow']);
// Route::get('/user/list', [App\Http\Controllers\UserController::class,'list']);
// Route::get('/user/create', [App\Http\Controllers\UserController::class,'create'] )->name('user.create');
// Route::post('/user/create', [App\Http\Controllers\UserController::class,'insert'] )->name('user.insert');


// Home
Route::get('/home/index', function () {
    return view('home/index');
});

Route::get('/home/login', function () {
    return view('home/login');
});

Route::get('/home/chatbox', function () {
    return view('home/chatbox');
});

Route::get('/home/login','HomeController@login')->name('home.login');
Route::get('/home/index','HomeController@index')->name('home.index');
Route::get('/home/contact','HomeController@contact')->name('home.contact');
Route::get('/home/help','HomeController@help')->name('home.help');
Route::get('/home/index','HomeController@home')->name('home.index');
Route::get('/home/announcement','HomeController@announcement')->name('home.announcement');
Route::get('/home/postCard','HomeController@postCard')->name('home.postCard');
Route::get('/home/chatbox','HomeController@chatbox')->name('home.chatbox');
