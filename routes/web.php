<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ClientController::class, 'index'])->name('index');
Route::get('/store', [ClientController::class, 'store'])->name('store');
Route::get('/update/{client}', [ClientController::class, 'update'])->name('update');
Route::get('/destroy/{client}', [ClientController::class, 'destroy'])->name('destroy');


Route::get('/teste', function() {
    $clientes = \App\Models\Client::orderByEncrypted('name')->get();
    foreach ($clientes as $cliente) {
        echo $cliente->name . '<br>';
    }
});
