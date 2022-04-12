<?php

use App\Http\Controllers\AbsenSiswaController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\JamPelajaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TugasSiswaController;
use App\Models\AbsenSiswa;
use App\Models\Kelas;
use App\Models\Level;
use App\Models\Mapel;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'] );

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::resource('/dashboard/jam-pelajaran', JamPelajaranController::class)->middleware('auth');

Route::resource('/dashboard/absen-siswa', AbsenSiswaController::class)->middleware('auth');

Route::get('/dashboard/siswa', function () {
    
    $title = '';
    if(request('kelas'))
    {
        $kelas = Kelas::firstWhere('slug', request('kelas'));
        $title = $kelas->name;
    }

    return view('dashboard.absen-siswa.siswa', [
        'title' => $title,
        'siswases' => User::filter(request(['kelas']))->get(),
        'kelases' => Kelas::all(),
    ]);

})->middleware('auth');

Route::resource('/dashboard/data-siswa', DataSiswaController::class)->middleware('auth');

Route::resource('/dashboard/tugas-siswa', TugasSiswaController::class)->middleware('auth');