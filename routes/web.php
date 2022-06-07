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

Route::get('/', function () {         
    return view('welcome');
});

Route::get('home',function (){                // عرض محتى التابع عند البحث عن هوم وهذه طريقة ليست مستخدمة
    return "michael is here";
});

Route::view('land1','land');                   // عند البحث عن لاند يعرض محتى الصفحة في الفيو وهذه طريقة غير مستخدمة


Route::get('land2','Mycontroller@land');   //يعرض عند البحث عن لاند2 ويظهر محتوى الكونترولور ماي كونترولور الطريقة لاند وهذه الاكثر استخدام

Route::get('result/{id}','MyController@sum');//يلي بين قوسين متغيرات بدخلن ليوزر عكيفو


//Route::resource('products','MyController');
Route::resource('web','MyController2');


Auth::routes();
Route::resource('posts','PostController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home','PostController@index');
Route::get('delete','PostController@deleteScholarships')->name('delete');
Route::get('update','PostController@updateScholarships')->name('update');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
//Routs for posts
// Route::get('/posts','PostController@index')->name('posts');

// Route::get('/post/create','PostController@create')->name('posts.create');

// Route::post('/post/store','PostController@store')->name('posts.store');

// Route::get('/post/show/{slug}','PostController@show')->name('posts.show');

// Route::get('/post/{id}','PostController@edit')->name('posts.edit');

// Route::post('/post/update/{id}','PostController@update')->name('posts.update');

// Route::get('/post/destroy/{id}','PostController@destroy')->name('posts.destroy');

