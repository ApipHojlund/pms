<?php

use Illuminate\Support\Facades\Route;
//login & dashboard
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

//controller umum
use App\Http\Controllers\UserController;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\JenisBahanController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DetailProduksiController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\ProductController;

//controller admin
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProdukController;
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
Route::get('/l', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [LoginController::class, 'register']);
Route::post('/register/store', [LoginController::class, 'store']);



Route::get('/',[DashboardController::class,'index']);
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('auth');
Route::get('/lanjut',[DashboardController::class,'lanjut'])->middleware('auth');

//Dashboard Buat Umum

Route::get('/user',[UserController::class,'index'])->middleware('admin');
Route::get('/user/create',[UserController::class,'create'])->middleware('admin');
Route::POST('/user/store',[UserController::class,'store'])->middleware('admin');
Route::get('/user/{id}/edit',[UserController::class,'edit'])->middleware('admin');
Route::post('/user/{id}/update',[UserController::class,'update'])->middleware('admin');
Route::post('/user/{id}/update/setting',[UserController::class,'updateprofile'])->middleware('auth');
Route::get('/user/{id}/hapus',[UserController::class,'destroy'])->middleware('admin');
Route::get('/user/{id}/change-password',[UserController::class,'password'])->middleware('auth');
Route::post('/user/change/{id}',[UserController::class,'changePassword'])->name('user.change.password');
Route::get('/profile/{id}',[UserController::class,'profile'])->middleware('auth');
Route::get('/user/setting/{id}',[UserController::class,'setting'])->middleware('auth');


Route::get('/material-type',[JenisBahanController::class,'index'])->middleware('auth');
Route::get('/material-type/create',[JenisBahanController::class,'create'])->middleware('petugas');
Route::POST('/material-type/store',[JenisBahanController::class,'store'])->middleware('petugas');
Route::get('/material-type/{id}/edit',[JenisBahanController::class,'edit'])->middleware('petugas');
Route::post('/material-type/{id}/update',[JenisBahanController::class,'update'])->middleware('petugas');
Route::get('/material-type/{id}/hapus',[JenisBahanController::class,'destroy'])->middleware('petugas');


Route::get('/material',[BahanController::class,'index'])->middleware('petugas');
Route::get('/material/all',[BahanController::class,'all'])->middleware('auth');
Route::get('/material/choice/{id}',[BahanController::class,'pilihan'])->middleware('auth');
Route::get('/material/create',[BahanController::class,'create'])->middleware('admin');
Route::POST('/material/store',[BahanController::class,'store'])->middleware('admin');
Route::get('/material/{id}/edit',[BahanController::class,'edit'])->middleware('admin');
Route::post('/material/{id}/update',[BahanController::class,'update'])->middleware('admin');
Route::get('/material/{id}/hapus',[BahanController::class,'destroy'])->middleware('admin');


Route::get('/machine',[MesinController::class,'index'])->middleware('auth');
Route::get('/machine/create',[MesinController::class,'create'])->middleware('admin');
Route::POST('/machine/store',[MesinController::class,'store'])->middleware('admin');
Route::get('/machine/{id}/edit',[MesinController::class,'edit'])->middleware('admin');
Route::post('/machine/{id}/update',[MesinController::class,'update'])->middleware('admin');
Route::get('/machine/{id}/hapus',[MesinController::class,'destroy'])->middleware('admin');
Route::get('/machine/{id}/detail',[MesinController::class,'detail'])->middleware('auth');


Route::get('/order',[PesananController::class,'index'])->middleware('auth');
Route::get('/order/request',[PesananController::class,'create'])->middleware('auth');
Route::POST('/order/store',[PesananController::class,'store'])->middleware('auth');
Route::get('/order/{id}/edit',[PesananController::class,'edit'])->middleware('auth');
Route::get('/order/{id}/detail',[PesananController::class,'show'])->middleware('auth');
Route::post('/order/{id}/update',[PesananController::class,'update'])->middleware('auth');
Route::get('/order/{id}/hapus',[PesananController::class,'destroy'])->middleware('auth');
Route::get('/order/{id}/detail',[PesananController::class,'detail'])->middleware('auth');


Route::get('/order/{id}/execute',[DetailProduksiController::class,'create'])->middleware('petugas');
Route::POST('/detail/store',[DetailProduksiController::class,'store'])->middleware('petugas');
Route::get('/detail',[DetailProduksiController::class,'index'])->middleware('petugas');
Route::get('/detail/request',[DetailProduksiController::class,'show'])->middleware('petugas');
Route::get('/detail/{id}/hapus',[DetailProduksiController::class,'destroy'])->middleware('petugas');
Route::get('/detail/{id}/detail',[DetailProduksiController::class,'detail'])->middleware('petugas');
Route::get('/detail/{id}/edit',[DetailProduksiController::class,'edit'])->middleware('petugas');
Route::post('/detail/{id}/store',[DetailProduksiController::class,'update'])->middleware('petugas');

//Production
Route::get('/production',[ProduksiController::class,'index'])->middleware('petugas');


//Produk
Route::get('/product',[ProductController::class,'index'])->middleware('petugas');

//Dashboard Khusus Admin

//dashboard
Route::get('/admin/dashboard',[DashboardController::class,'admin'])->middleware('admin');

//user page
Route::get('/user/admin',[AdminUserController::class,'admin'])->middleware('admin');
Route::get('/user/all',[AdminUserController::class,'index'])->middleware('admin');
Route::get('/user/petugas',[AdminUserController::class,'petugas'])->middleware('admin');
Route::get('/user/customer',[AdminUserController::class,'customer'])->middleware('admin');
Route::get('/user/tambah',[AdminUserController::class,'create'])->middleware('admin');
Route::get('/user/change-password/{id}',[AdminUserController::class,'password'])->middleware('admin');
Route::post('/user/changePassword/{id}',[AdminUserController::class,'changePassword'])->middleware('auth');
Route::post('/user/tambah',[AdminUserController::class,'store'])->middleware('admin');
Route::get('/user/{id}/ubah',[AdminUserController::class,'edit'])->middleware('admin');
Route::get('/user/{id}/setting',[AdminUserController::class,'edit'])->middleware('admin');
Route::post('/user/{id}/edit',[AdminUserController::class,'update'])->middleware('admin');
Route::get('/user/{id}/delete',[AdminUserController::class,'destroy'])->middleware('admin');
Route::get('/user/{id}/profile',[AdminUserController::class,'profile'])->middleware('admin');

//detail produksi
Route::get('/detail_produksi',[DetailController::class,'index'])->middleware('admin');
Route::get('/detail_produksi/tertunda',[DetailController::class,'tertunda'])->middleware('admin');
Route::get('/detail_produksi/berhenti',[DetailController::class,'berhenti'])->middleware('admin');
Route::get('/detail_produksi/selesai',[DetailController::class,'selesai'])->middleware('admin');
Route::get('/detail_produksi/dalam_proses',[DetailController::class,'proses'])->middleware('admin');
Route::get('/detail_produksi/dalam_antrian',[DetailController::class,'antrian'])->middleware('admin');
Route::get('/detail_produksi/{id}/detail',[DetailController::class,'show'])->middleware('petugas');
Route::get('/detail_produksi/{id}/edit',[DetailController::class,'edit'])->middleware('petugas');
Route::get('/detail_produksi/pilih_model',[DetailController::class,'pilih'])->middleware('admin');
Route::get('/pemesanan/{id}/execute',[DetailController::class,'create'])->middleware('petugas');
Route::post('/detail_produksi/store',[DetailController::class,'store'])->middleware('petugas');
Route::post('/detail_produksi/{id}/store',[DetailController::class,'update'])->middleware('petugas');

//Jenis Bahan
Route::get('/jenis_bahan',[JenisController::class,'index'])->middleware('admin');
Route::post('/jenis_bahan/store',[JenisController::class,'store'])->middleware('admin');
Route::post('/jenis_bahan/{id}/update',[JenisController::class,'update'])->middleware('admin');


//Produk
Route::get('/produk',[ProdukController::class,'index'])->middleware('admin');


//bahan
Route::get('/bahan',[MaterialController::class,'index'])->middleware('admin');
Route::get('/bahan/seluruh',[MaterialController::class,'all'])->middleware('admin');
Route::get('/bahan/create',[MaterialController::class,'create'])->middleware('admin');
Route::post('/bahan/store',[MaterialController::class,'store'])->middleware('admin');
Route::get('/bahan/{id}/edit',[MaterialController::class,'edit'])->middleware('admin');
Route::post('/bahan/{id}/update',[MaterialController::class,'update'])->middleware('admin');
Route::get('/bahan/jenis/{id}',[MaterialController::class,'show'])->middleware('admin');

//Pemesanan
Route::get('/pemesanan',[OrderController::class,'index'])->middleware('admin');
Route::get('/pemesanan/request',[OrderController::class,'create'])->middleware('admin');
Route::POST('/pemesanan/store',[OrderController::class,'store'])->middleware('admin');
Route::get('/pemesanan/{id}/edit',[OrderController::class,'edit'])->middleware('admin');
Route::get('/pemesanan/{id}/detail',[OrderController::class,'show'])->middleware('admin');
Route::post('/pemesanan/{id}/update',[OrderController::class,'update'])->middleware('admin');
Route::get('/pemesanan/{id}/hapus',[OrderController::class,'destroy'])->middleware('admin');
Route::get('/pemesanan/{id}/detail',[OrderController::class,'detail'])->middleware('admin');
Route::get('/order/{id}/view-document', [OrderController::class, 'viewDocument']);


//produksi
Route::get('/produksi',[ProduksiController::class,'utama'])->middleware('admin');
Route::post('/pesanan/proses',[ProduksiController::class,'store'])->middleware('admin');
Route::get('/produksi/tambah',[ProduksiController::class,'createAdmin'])->middleware('admin');
Route::get('/produksi/{id}/hapus',[ProduksiController::class,'hapus'])->middleware('admin');
Route::post('/produksi/{id}/update',[ProduksiController::class,'update'])->middleware('admin');
Route::get('/produksi/{id}/detail',[ProduksiController::class,'show'])->middleware('admin');


//Mesin
Route::get('/mesin',[MachineController::class,'index'])->middleware('admin');
Route::get('/mesin/create',[MachineController::class,'create'])->middleware('admin');
Route::POST('/mesin/store',[MachineController::class,'store'])->middleware('admin');
Route::get('/mesin/{id}/edit',[MachineController::class,'edit'])->middleware('admin');
Route::post('/mesin/{id}/update',[MachineController::class,'update'])->middleware('admin');
Route::get('/mesin/{id}/hapus',[MachineController::class,'destroy'])->middleware('admin');
Route::get('/mesin/{id}/detail',[MachineController::class,'detail'])->middleware('admin');
