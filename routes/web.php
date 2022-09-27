<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/the-loai/{slug}', 'get_product_by_slug_cat');
    Route::get('/san-pham/{slug}', 'get_detail_product');
    Route::get('/blog', 'get_all_blog');
    Route::get('/blog/{slug}', 'get_blog_by_slug');
});

//test views login
// Route::get('/login', function (){
//     return view('login/signin');
// });
// Route::get('/register', function (){
//     return view('login/register');
// });

// Route::middleware(['auth', 'admin'])->group(function () {

    Route::prefix('admin')->name('admin.')->group(function () {

        //route category here...
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/loai/danh-sach', 'index')->name('dsloai');
            Route::get('/loai/them', 'create');
            Route::post('/loai/them', 'store');
            Route::get('/loai/sua/{id}', 'edit');
            Route::post('/loai/sua/{id}', 'update');
            Route::get('/loai/xoa/{id}', 'destroy');
        });
        //product here...
        Route::controller(ProductController::class)->group(function () {
            Route::get('/san-pham/danh-sach', 'index');
            Route::get('/san-pham/them', 'create');
            Route::post('/san-pham/them', 'store');
            Route::get('/san-pham/sua/', 'edit');
            Route::post('/san-pham/sua', 'update');
            Route::get('/san-pham/xoa/{id}', 'destroy');
        });
        //blog here..
        Route::controller(BlogController::class)->group(function () {
            Route::get('/blog/danh-sach', 'index');
            Route::get('/blog/them', 'create');
            Route::post('/blog/them', 'store');
            Route::get('/blog/sua/', 'edit');
            Route::post('/blog/sua', 'update');
            Route::get('/blog/xoa/{id}', 'destroy');
        });

    });

// });









