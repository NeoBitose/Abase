<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BotmanController;
use App\Http\Controllers\HistorySPPController;
use App\Http\Controllers\HistoryTanggunganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelulusanController;
use App\Http\Controllers\KenaikanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\TanggunganController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\ImportController;



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

Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes(['register'=>false, 'reset'=>false,]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/search', [HomeController::class, 'search']);

// Auth::routes();

Route::group(['middleware' => 'superadmin'],function(){

    Route::resource('/tambah_user',SuperController::class);
    Route::get('/user/edit/{id}', [SuperController::class, 'edituser']);
    Route::post('/user/update/{id}', [SuperController::class, 'updateuser']);
    Route::get('/cekspp', [SiswaController::class, 'cek']);
    Route::get('/cektanggungan', [SiswaController::class, 'cektanggungan']);
    Route::post('/spp/kelas', [SiswaController::class, 'cek']);
    Route::post('/tanggungan/kelas', [SiswaController::class, 'cektanggungan']);
    Route::get('/filter/tanggal/spp',[SppController::class,'filter']);
    Route::get('/filter/tanggal/tanggungan',[TanggunganController::class,'filter']);

});
Route::group(['middleware' => 'auth'],function(){
    Route::resource('/history_spp',HistorySPPController::class);
    Route::resource('/history_tanggungan',HistoryTanggunganController::class);
    Route::resource('/kelulusan',KelulusanController::class);
    Route::resource('/kenaikan',KenaikanController::class);
    Route::resource('/siswa',SiswaController::class);
    Route::resource('/spp',SPPController::class);
    Route::resource('/tanggungan',TanggunganController::class);
    Route::resource('/tentang',TentangController::class);
    Route::resource('/import',ImportController::class);
    Route::post('/template_excel',[SiswaController::class, 'exceltemp']);

    Route::get('/nonaktif/{nisn}',[SiswaController::class,'nonaktif']);
    Route::get('/aktif/{nisn}',[SiswaController::class,'aktif']);
    Route::post('/kenaikan/kelas', [KenaikanController::class, 'kenaikan']);
    Route::post('/kelulusan/siswa', [KelulusanController::class, 'kelulusan']);
    Route::post('/kenaikan/act', [KenaikanController::class, 'actkenaikan']);
    Route::post('/kelulusan/act', [KelulusanController::class, 'actkelulusan']);
    Route::get('/kwitansi/{id_detail_spp}',[SiswaController::class,'kwitansi']);
    Route::get('/kwitansitanggungan/{id_detail_tanggungan}',[SiswaController::class,'kwitansitanggungan']);
    Route::post('/pembayaranspp/{id_detail_spp}',[SiswaController::class,'pembayaranspp']);
    Route::post('/pembayarantanggungan',[SiswaController::class,'pembayarantanggungan']);
    Route::get('/riwayatpembayaranspp',[SiswaController::class,'riwayatpembayaranspp']);
    Route::get('/riwayatpembayarantanggungan',[SiswaController::class,'riwayatpembayarantanggungan']);
    Route::get('/alumni',[SiswaController::class,'alumni']);

    // Route::resource('/alumni',AlumniController::class);
    Route::post('/kenaikan/none', [KenaikanController::class, 'nonekenaikan']);
    Route::post('/kelulusan/none', [KelulusanController::class, 'nonekelulusan']);
    Route::get('/pembayaran/tanggungan/',[TanggunganController::class,'pembayarantanggungan']);  
    
    Route::post('/filadminpsm',[SiswaController::class, 'filriwayatpembayaranspp']);
    Route::post('/filadmintanggungan',[SiswaController::class, 'filriwayatpembayarantanggungan']);
});