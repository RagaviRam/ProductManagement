<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductManagementController;

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
Route::get('/product', [ProductController::class, 'dashboardProduct'])->name('product/product_dashboard');
Route::get('/customer', [ProductController::class, 'customerCreate'])->name('product/customer_dashboard');
Route::get('/add', [ProductController::class, 'productCreate'])->name('product/add_product');
Route::post('/store', [ProductController::class, 'productStore'])->name('product/store_product');
Route::get('/index', [ProductController::class, 'productIndex'])->name('product/product_list');
Route::delete('/delete/{id}', [ProductController::class, 'productDestroy'])->name('product/product_delete');
Route::get('/edit/{id}', [ProductController::class, 'productEdit'])->name('product/product_edit');
Route::put('/update/{id}', [ProductController::class,'productUpdate'])->name('product/update');
Route::get('/cart', [ProductController::class, 'cart'])->name('product/cart')->middleware('auth');


Route::get('admin/list', [AdminController::class, 'create'])->name('admin/list')/* ->middleware (['auth','product']) */;
Route::post('admin/store', [AdminController::class, 'store'])->name('admin/register');
Route::get('admin/create', [AdminController::class, 'index'])->name('product/admin');
Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('admin/edit');
Route::put('admin/update/{id}', [AdminController::class, 'update'])->name('admin/update');
Route::delete('admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin/delete');

Route::get('manager/list', [ManagerController::class, 'create'])->name('manager/list')/* ->middleware (['auth','product']) */;
Route::post('manager/store', [ManagerController::class, 'store'])->name('manager/register');
Route::get('manager/create', [ManagerController::class, 'index'])->name('product/manager');
Route::get('manager/edit/{id}', [ManagerController::class, 'edit'])->name('manager/edit');
Route::put('manager/update/{id}', [ManagerController::class, 'update'])->name('manager/update');
Route::delete('manager/delete/{id}', [ManagerController::class, 'destroy'])->name('manager/delete');

Route::get('customer/list', [CustomerController::class, 'create'])->name('customer/list')/* ->middleware (['auth','product']) */;
Route::post('customer/store', [CustomerController::class, 'store'])->name('customer/register');
Route::get('customer/create', [CustomerController::class, 'index'])->name('product/customer');
Route::get('customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer/edit');
Route::put('customer/update{id}', [CustomerController::class, 'update'])->name('customer/update');
Route::delete('customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer/delete');



Route::get('/shopping', [ProductManagementController::class, 'productCreate']);
Route::get('/adminerror', [ProductManagementController::class, 'adminErr'])->name('admin/error');
Route::get('/managererror', [ProductManagementController::class, 'managerErr'])->name('manager/error');








Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
