<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [ProductController::class, 'create'])->name('product/dashboard');
Route::get('/manager', [ProductController::class, 'dashboardManager'])->name('product/manager_dashboard');
Route::get('/customer', [ProductController::class, 'dashboardCustomer'])->name('product/customer_dashboard');
Route::get('/product', [ProductController::class, 'dashboardProduct'])->name('product/product_dashboard');
Route::get('/customer', [ProductController::class, 'customerCreate'])->name('product/customer_dashboard');
Route::get('/add', [ProductController::class, 'productCreate'])->name('product/add_product');
Route::post('/store', [ProductController::class, 'productStore'])->name('product/store_product');
Route::get('/index', [ProductController::class, 'productIndex'])->name('product/product_list');
Route::delete('/delete/{id}', [ProductController::class, 'productDestroy'])->name('product/product_delete');
Route::get('/edit/{id}', [ProductController::class, 'productEdit'])->name('product/product_edit');
Route::get('/update', [ProductController::class,'productUpdate']);

Route::get('admin/create', [AdminController::class, 'create'])->name('product/admin');
Route::post('admin/store', [AdminController::class, 'store'])->name('admin/register');
Route::get('admin/list', [AdminController::class, 'index'])->name('admin/list');
Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('admin/edit');
Route::put('admin/update', [AdminController::class, 'update']);










Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
