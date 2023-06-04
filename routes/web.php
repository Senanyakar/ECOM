<?php

namespace App\Http\Livewire;
use Livewire\Component;

use App\Http\Controllers\MapController;
use App\Http\Controllers\DenemeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyinfoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StoneController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[HomeController::class, 'home'])->name('home_index');
Route::get('/contact',[HomeController::class, 'home_contact'])->name('home_contact');
Route::get('/aboutus',[HomeController::class, 'home_aboutus'])->name('home_aboutus');

Route::prefix('/property')->name('home_')->controller(HomeController::class)->group(function (){
    Route::get('/', 'home_property')->name('property');
    Route::get('/single/{id}', 'property_single')->name('property_single');
});

Route::prefix('/stone')->name('home_')->controller(HomeController::class)->group(function (){
    Route::get('/', 'home_stone')->name('stone');
    Route::get('/single/{id}', 'stone_single')->name('stone_single');
});

Route::get('/news',[HomeController::class, 'home_agenty'])->name('home_agenty');
Route::get('/news/single',[HomeController::class, 'home_news_single'])->name('home_news_single');
Route::prefix('/news')->name('home_')->controller(HomeController::class)->group(function (){
    Route::get('/', 'home_news')->name('news');
    Route::get('/single/{id}', 'news_single')->name('news_single');
});

Route::post('/search/post',[SearchController::class, 'search_post'])->name('admin_index_post');
Route::get('/search',[SearchController::class, 'search_index'])->name('admin_index_get');

Route::get('/search',[PostsController::class, 'search'])->name('search');


/*********************ADMIN Part ************************************/

Route::middleware('auth')->group(function(){

    Route::get('/backoffice',[AdminController::class, 'index'])->name('admin_index');
    Route::get('/backoffice/tables',[AdminController::class, 'tables_index'])->name('admin_tables_index');
    Route::get('/backoffice/profile',[AdminController::class, 'profile_index'])->name('admin_profile_index');
    Route::get('/backoffice/profile/update',[AdminController::class, 'profile_index'])->name('admin_profile_update');


/******************************* PROPERTY ROUTE ****************************/
Route::get('/backoffice/property',[PropertyController::class, 'index'])->name('admin_property_index');
Route::get('/backoffice/property/create',[PropertyController::class, 'create'])->name('admin_property_create');
Route::post('/backoffice/property/store',[PropertyController::class, 'store'])->name('admin_property_store');
Route::get('/backoffice/property/show/{id}',[PropertyController::class, 'show'])->name('admin_property_show');
Route::get('/backoffice/property/edit/{id}',[PropertyController::class, 'edit'])->name('admin_property_edit');
Route::post('/backoffice/property/update/{id}',[PropertyController::class, 'update'])->name('admin_property_update');
Route::get('/backoffice/property/destroy/{id}',[PropertyController::class, 'destroy'])->name('admin_property_destroy');

/******************************* News ROUTE ****************************/
Route::get('/backoffice/news',[NewsController::class, 'index'])->name('admin_news_index');
Route::get('/backoffice/news/create',[NewsController::class, 'create'])->name('admin_news_create');
Route::post('/backoffice/news/store',[NewsController::class, 'store'])->name('admin_news_store');
Route::get('/backoffice/news/show/{id}',[NewsController::class, 'show'])->name('admin_news_show');
Route::get('/backoffice/news/edit/{id}',[NewsController::class, 'edit'])->name('admin_news_edit');
Route::post('/backoffice/news/update/{id}',[NewsController::class, 'update'])->name('admin_news_update');
Route::get('/backoffice/news/destroy/{id}',[NewsController::class, 'destroy'])->name('admin_news_destroy');

/******************************* Stone ROUTE ****************************/
Route::get('/backoffice/stone',[StoneController::class, 'index'])->name('admin_stone_index');
Route::get('/backoffice/stone/create',[StoneController::class, 'create'])->name('admin_stone_create');
Route::post('/backoffice/stone/store',[StoneController::class, 'store'])->name('admin_stone_store');
Route::get('/backoffice/stone/show/{id}',[StoneController::class, 'show'])->name('admin_stone_show');
Route::get('/backoffice/stone/edit/{id}',[StoneController::class, 'edit'])->name('admin_stone_edit');
Route::post('/backoffice/stone/update/{id}',[StoneController::class, 'update'])->name('admin_stone_update');
Route::get('/backoffice/stone/destroy/{id}',[StoneController::class, 'destroy'])->name('admin_stone_destroy');


Route::get('frontbase',function(){
    return view('layouts.frontbase');
});


/******************************* iMAGE ROUTE *******************************/
Route::get('/backoffice/image',[ImageController::class, 'index'])->name('admin_image_index');
Route::get('/backoffice/image',[ImageController::class, 'create'])->name('admin_image_create');
Route::get('/backoffice/image',[ImageController::class, 'store'])->name('admin_image_store');
Route::get('/backoffice/image',[ImageController::class, 'edit'])->name('admin_image_edit');
Route::get('/backoffice/image',[ImageController::class, 'update'])->name('admin_image_update');
Route::get('/backoffice/image',[ImageController::class, 'delete'])->name('admin_image_delete');
Route::get('/backoffice/image',[ImageController::class, 'show'])->name('admin_image_show');


/******************************* USER ROUTE ********************************/
Route::get('/backoffice/user',[UserController::class, 'index'])->name('admin_user_index');
Route::get('/backoffice/user/create',[UserController::class, 'create'])->name('admin_user_create');
Route::get('/backoffice/user/store',[UserController::class, 'store'])->name('admin_user_store');
Route::get('/backoffice/user/index',[UserController::class, 'edit'])->name('admin_user_edit');
Route::get('/backoffice/user/update',[UserController::class, 'update'])->name('admin_user_update');
Route::get('/backoffice/user/destroy',[UserController::class, 'destroy'])->name('admin_user_destroy');

/******************************* COMPANY INFO ROUTE ********************************/
Route::get('/backoffice/setting/companyinfo',[CompanyinfoController::class, 'index'])->name('admin_setting_companyinfo_index');
Route::get('/backoffice/setting/companyinfo/edit',[CompanyinfoController::class, 'edit'])->name('admin_setting_companyinfo_edit');
Route::get('/backoffice/setting/companyinfo/update',[CompanyinfoController::class, 'update'])->name('admin_setting_companyinfo_update');


/******************************* MESSAGE ROUTE *****************************/
Route::get('/backoffice/message',[MessageController::class, 'index'])->name('admin_message_index');
Route::get('/backoffice/message/create',[MessageController::class, 'create'])->name('admin_message_create');
Route::get('/backoffice/message/store',[MessageController::class, 'store'])->name('admin_message_store');
Route::get('/backoffice/message/edit',[MessageController::class, 'edit'])->name('admin_message_edit');
Route::get('/backoffice/message/update',[MessageController::class, 'update'])->name('admin_message_update');
Route::get('/backoffice/message/destroy',[MessageController::class, 'delete'])->name('admin_message_delete');
Route::get('/backoffice/message/show',[MessageController::class, 'show'])->name('admin_message_show');






});




































/**************deneme************/
Route::get('/livewire1',[DenemeController::class,'livewire1'])->name('livewire1');
Route::get('/chatbot',[DenemeController::class,'chatbot'])->name('chatbot');
