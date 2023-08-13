<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AboutUsIamgesController;
use App\Http\Controllers\AdminContact;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//website routes
Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/products', [IndexController::class, 'products']);
Route::get('/contact-us', [IndexController::class, 'contact']);
Route::get('/services', [IndexController::class, 'services']);
Route::get('/news', [IndexController::class, 'news']);
Route::get('/jobs', [IndexController::class, 'jobs']);
Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' => 'home'], function(){
    Route::resource('contact', AdminContact::class); //contact
    Route::resource('home-page', HomePageController::class); //home-page
    Route::resource('about-page', AboutUsController::class); //about-page
    Route::resource('products', ProductsController::class); //products
    Route::resource('customers', CustomersController::class); //customers
    Route::resource('jobs', JobsController::class); //jobs
    Route::resource('news', NewsController::class); //news
    Route::resource('categories', CategoriesController::class); //categories
    Route::resource('tags', TagsController::class); //tags
    //productImages
    Route::get('productImages/{id}',[ProductsController::class, 'productImages'])->name('productImages');
    Route::resource('gallery', GalleryController::class); //gallery
});


