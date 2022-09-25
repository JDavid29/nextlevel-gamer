<?php
// falta importar mas rapido estas rutas o algun comando
use App\Http\Livewire\Shop\Cart\IndexComponent as CartIndexComponent;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Shop\IndexComponent;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//creamos otra ruta
Route::get('/', IndexComponent::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ruta para el carrito de compras
Route::get('/cart', CartIndexComponent::class)->name('cart');
