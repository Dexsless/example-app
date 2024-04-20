<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, "welcome"]);
Route::get('/index', [HomeController::class, "index"]);
Route::get('/learning', [HomeController::class, "learning"]);
Route::get('/about', function() {
    return '<h1>Hello World</h1>'
    . 'My Name is Dani <br>'
    . 'I like code since i was SD';
});
Route::get('/ListKarakterEPEP', function() {
    $king = 'Alok';
    $biasa = ['Hayato','Caroline','Kelly','Moco'];
    return view('ListKarakterEPEP', compact('king', 'biasa'));
});
Route::get('/halaman2', function() {
    return view('animals');
});
Route::get('/About2', function() {
    $nama = 'Dani';
    return view('about', compact('nama'));
});
Route::get('/sample/{nama}', function(Request $request, $nama) {
    $nama2 = $nama;
    return view('sample', compact('nama2'));
});