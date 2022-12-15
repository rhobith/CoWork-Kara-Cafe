<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Pelanggan;
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

// Get Page
Route::get('/', [OrderController::class,'index']);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/info', function () {
   $pelanggan = Pelanggan::all()->last()->get(); 
    return view('info',[
        'title' => 'Information',
        'order' => Order::where('pelanggan_id',$pelanggan[0]->id)->get(),
        'menu' => Menu::all()
    ]);
});

Route::get('/login', function () {
    return view('login',[
        'title' => 'Login'
    ]);
});

Route::get('/verifikasi', function () {
    return view('verifikasi',[
         'title' => 'Verifikasi',
         'pelanggan' => Pelanggan::all()
    ]);
});

// Store Data
Route::post('/', [PelangganController::class, 'store']);
Route::post('/login', [PegawaiController::class, 'authenticate']);
Route::post('/menu', [OrderController::class, 'store']);
Route::post('/info', [OrderController::class, 'update']);