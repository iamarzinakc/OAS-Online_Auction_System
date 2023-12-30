<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\JewelryController;
use App\Http\Controllers\ElectricalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserViewController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

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



Route::prefix('admin')->middleware('auth')->group(function () {

    // Admin Routes -----------------------------------------

    Route::resource('/', DashboardController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/user_role', UserRoleController::class);
    Route::resource('/companyInfo', CompanyInfoController::class);
    Route::resource('/vehicle', VehicleController::class);
    Route::resource('/watch', WatchController::class);
    Route::resource('/jewelry', JewelryController::class);
    Route::resource('/electrical', ElectricalController::class);
    Route::resource('/product/feature', FeatureController::class);
    Route::resource('/product/brand', BrandController::class);
    Route::resource('/product/category', CategoryController::class);
    Route::resource('/product/type', TypeController::class);
    Route::resource('/product', ProductController::class);
});

// Client Users Routes  --------------------------------
Route::prefix('')->middleware('auth')->group(function () {

Route::get('/', [App\Http\Controllers\UserViewController::class, 'dashboard'])->name('dashboard');
Route::get('blog', [App\Http\Controllers\UserViewController::class, 'blog'])->name('blog');
Route::get('contact', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('contact/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('about', [App\Http\Controllers\UserViewController::class, 'about'])->name('about');
Route::get('product', [App\Http\Controllers\UserViewController::class, 'product'])->name('product');
Route::get('product_detail/{id}', [App\Http\Controllers\UserViewController::class, 'productdetail'])->name('product.detail');
Route::get('bid/store/{id}', [App\Http\Controllers\BidController::class, 'store'])->name('bid.store');


// User Profile Details Route =================================================================
});
Route::prefix('')->middleware('auth')->group(function () {
    Route::get('profile', [App\Http\Controllers\UserProfileController::class, 'profile'])->name('profile');
    Route::get('dashboard', [App\Http\Controllers\UserProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('my-bid', [App\Http\Controllers\UserProfileController::class, 'mybid'])->name('mybid');
    Route::get('win-bid', [App\Http\Controllers\UserProfileController::class, 'winbid'])->name('winbid');
});



// ==================================== Product Type Status Update Route ====================
Route::get('admin/product/type/onStatus/{id}',[App\Http\Controllers\TypeController::class, 'onStatus']);
Route::get('admin/product/type/offStatus/{id}',[App\Http\Controllers\TypeController::class, 'offStatus']);
// ====================================== Product Brand Status Update Route ==================
Route::get('admin/product/brand/onStatus/{id}',[App\Http\Controllers\BrandController::class, 'onStatus']);
Route::get('admin/product/brand/offStatus/{id}',[App\Http\Controllers\BrandController::class, 'offStatus']);
// ====================================== Product Category Status Update Route ==================
Route::get('admin/product/category/onStatus/{id}',[App\Http\Controllers\CategoryController::class, 'onStatus']);
Route::get('admin/product/category/offStatus/{id}',[App\Http\Controllers\CategoryController::class, 'offStatus']);
// ====================================== Product Feature Status Update Route ==================
Route::get('admin/product/feature/onStatus/{id}',[App\Http\Controllers\FeatureController::class, 'onStatus']);
Route::get('admin/product/feature/offStatus/{id}',[App\Http\Controllers\FeatureController::class, 'offStatus']);
// ======================================  Product Status Update Route ==================
Route::get('admin/product/onStatus/{id}',[App\Http\Controllers\ProductController::class, 'onStatus']);
Route::get('admin/product/offStatus/{id}',[App\Http\Controllers\ProductController::class, 'offStatus']);
// ====================================== User Role  Status Update Route ==================
Route::get('admin/user_role/onStatus/{id}',[App\Http\Controllers\UserRoleController::class, 'onStatus']);
Route::get('admin/user_role/offStatus/{id}',[App\Http\Controllers\UserRoleController::class, 'offStatus']);
// ====================================== User   Status Update Route ==================
Route::get('admin/user/onStatus/{id}',[App\Http\Controllers\UserController::class, 'onStatus']);
Route::get('admin/user/offStatus/{id}',[App\Http\Controllers\UserController::class, 'offStatus']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();
Route::get('my-notification/{type}', 'HomeController@myNotification');