<?php

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

include('RouteAdmin.php');
Route::get('/', 'Admin\AdminUserController@ajaxDatatable')->name('datatable.example');
Route::get('/','HomeController@index')->name('home');
Route::get('/about-us','HomeController@aboutUs')->name('about.us');
Route::get('/contact','HomeController@contact')->name('contact');
Route::group(['prefix'=>'category'],function()
{
    Route::get('/{slugname}/{id}','CategoryController@index')->name('category.index');
    Route::get('/{slugname}/{id}/{order}','CategoryController@indexOrder')->name('category.index.order');
    Route::get('/{slugname}/{id}/attribute/{at}','CategoryController@indexOrderAttribute')->name('category.index.order.attribute');
});

Route::group(['prefix'=>'product'],function()
{
    Route::get('/{slugname}/{id}','ProductController@index')->name('product.index');
});

Route::group(['namespace'=>'Auth'],function()
{
    Route::get('dang-ky','RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky','RegisterController@postRegister');
    Route::get('dang-nhap','LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','LoginController@postLogin');
    Route::get('dang-xuat','LoginController@getLogout')->name('get.logout');
    Route::post('lay-lai-mat-khau','ForgotPasswordController@postResetPassword')->name('post.reset.password');
    Route::get('doi-mat-khau-lay-lai','ForgotPasswordController@getChangePasswordReset')->name('get.change.reset.password');
    Route::post('doi-mat-khau-lay-lai','ForgotPasswordController@postChangePasswordReset');
});

Route::group(['prefix'=>'shopping'],function()
{
    Route::get('/','ShoppingCartController@index')->name('shopping.cart.index');
    Route::get('add/{id}','ShoppingCartController@addProduct')->name('shopping.add.product');
    Route::get('/delete/{key}','ShoppingCartController@deleteProductItem')->name('shopping.delete.product');
    Route::post('/edit','ShoppingCartController@editProductItem')->name('shopping.edit.product');
});

Route::group(['prefix'=>'feature-user','middleware'=>'checkLoginUser'],function()
{
    Route::get('/checkout','FeatureUserController@getFormPay')->name('feature.user.checkout');
    Route::post('/checkout','FeatureUserController@saveInfoShoppingCart');
    Route::get('/delete/nofitication/{id}','FeatureUserController@deleteNofication')->name('feature.user.delete.nofication');
});

Route::group(['prefix'=>'rating','middleware'=>'checkLoginUser'],function()
{
    Route::post('/{id}','RatingController@saveRating')->name('post.rating.product');
    Route::get('/delete/{id}','RatingController@deleteRating')->name('get.delete.rating.product');
});

// favorite_product
Route::group(['prefix'=>'favorite_product','middleware'=>'checkLoginUser'],function()
{
    Route::get('/','FavoriteProductController@index')->name('favorite.product.index');
    Route::get('add/{id}','FavoriteProductController@addProduct')->name('get.add.favorite.product');
    Route::get('delete/{id}','FavoriteProductController@deleteProduct')->name('get.delete.favorite.product');
});

Route::group(['prefix'=>'history_user','middleware'=>'checkLoginUser'],function()
{
    Route::get('/','HistoryController@index')->name('history.index');
    Route::get('/get-order-item/{id}','HistoryController@getOrderItem')->name('history.get.order.item');
    Route::get('/paid/{id}','HistoryController@transactionPaid')->name('history.transaction.paid');
});

Route::group(['prefix'=>'article'],function()
{
    Route::get('/','ArticleController@index')->name('article.index');
    Route::get('/detail/{id}','ArticleController@getDetailArticle')->name('get.article.detail');
});

Route::group(['prefix'=>'searh'],function()
{
    Route::get('/','SearhController@index')->name('searh.index');
});
