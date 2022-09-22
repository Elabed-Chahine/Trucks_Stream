<?php
namespace App\Http\Controllers ;

use App\Models\Driver;
use App\Models\Voyage;
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

/* showing infos on the homepage */
Route::get('/',[ShipmentController::class,'index']);
Route::get('drivers', [DriverController::class, 'index']);


/* registration routes are here */
Route::get('register', [registerController::class, 'create']);
Route::post('register', [registerController::class, 'store']);

/* login and logout routes are here */
Route::get('login', [logController::class, 'create']);
Route::post('login', [logController::class, 'show']);
Route::get('logout', [logController::class, 'logout']);





/*showing the dashboard and profile infos routes are here */
Route::get('dashboard/layout', [Controller::class, 'show']);
Route::get('checkout/layout', [Controller::class, 'index']);
Route::get('drivers/driver/{driver:id}', [DriverController::class, 'profile']);
Route::get('User/{user:id}', [UserController::class, 'profile']);




/* here we manipulate shipments */
Route::Post('user/shipments', [UserController::class, 'store']);
Route::get('user/shipments', [UserController::class, 'create']);
Route::delete('user/ships/{shipment}', [UserController::class,'destroy']);
Route::PATCH('user/ships/{shipment}', [UserController::class,'updat']);
Route::get('user/shipments/{shipment}/edit', [UserController::class, 'edit']);

Route::get('shipments/{shipment}', [ShipmentController::class, 'detail']);




Route::delete('driver/{voyage}', [DriverController::class, 'destroy']);





Route::POST('driver/add', [DriverController::class, 'store']);



//these routes cocern the admin

Route::Post('admin/shipments', [AdminController::class, 'store'])->middleware('admin');
Route::get('Admin/shipments', [AdminController::class, 'create'])->middleware('admin');
Route::delete('admin/ships/{shipment}', [AdminController::class, 'destroy'])->middleware('admin');
Route::PATCH('admin/ships/{shipment}', [AdminController::class, 'updat'])->middleware('admin');
Route::get('admin/shipments/{shipment}/edit', [AdminController::class, 'edit'])->middleware('admin');
Route::get('Admin/dashboard/layout', [AdminController::class, 'index'])->middleware('admin');
Route::delete('admin/{user}', [AdminController::class, 'delete'])->middleware( 'admin');
Route::get('Admin/dashboard/users', [AdminController::class, 'users'])->middleware('admin');
Route::delete('admin/del/{driver}', [AdminController::class, 'efface'])->middleware( 'admin');
Route::get('Admin/dashboard/drivers', [AdminController::class, 'drivers'])->middleware('admin');