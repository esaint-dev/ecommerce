<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\EnsureTokenIsValid;


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

Route::get('/App', function ()  {
    return view('welcome');
});


Route::get("/", [AuthController::class, 'register'])->name('register');
Route::post("/registration", [AuthController::class, 'registration'])->name('registration');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logging', [AuthController::class, 'logging'])->name('logging');

//Register Route


  
//dashboard 

//Admin Dashboard
Route::get("/admin", [adminController::class, 'admin'])->name('admin');

Route::get("/admin/customer-list", [AdminDashboardController::class, 'customer_list'])->name('customer-list');

Route::get('components/sidebarall', [adminController::class, 'sidebarAll'])->name('sidebar');





Route::middleware([EnsureTokenIsValid::class])->group(function () {
    // Add your authenticated routes here
    Route::get("/home", [UserController::class, 'userList'])->name('home'); 
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

//products routes
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');