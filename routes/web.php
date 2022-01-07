<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
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

Route::group(['middleware' => 'admin'], function () {
    Route::get('manager', ['as' => 'manager.products', function () {
        return view('manager.productos');
    }]);
});
Route::post('product/delete',  [ProductController::class, 'delete'])->name('product.delete');
Route::post('product/custom-update',  [ProductController::class, 'customUpdate'])->name('product.custom.update');

Route::group(['middleware' => 'auth'], function () {
    Route::get('perfil', ['as' => 'pages.perfil', function () {
        return view('pages.perfil');
    }]);
    Route::get('logout',  [LoginController::class, 'logout'])->name('logout');
});
Route::resource('cart', CartController::class);
Route::resource('product', ProductController::class);
Route::resource('user', UserController::class);

Route::get('/', ['as' => 'pages.index', function () {
    return view('pages.index');
}]);

Route::get('aviso-privacidad', ['as' => 'pages.privacidad', function () {
    return view('pages.privacidad');
}]);

Route::get('cambios-devoluciones', ['as' => 'pages.devoluciones', function () {
    return view('pages.devoluciones');
}]);

Route::get('envio', ['as' => 'pages.envio', function () {
    return view('pages.envio');
}]);

Route::get('acercade', ['as' => 'pages.acercade', function () {
    return view('pages.acercade');
}]);



Route::get('blog', ['as' => 'pages.blog', function () {
    return view('pages.blog');
}]);

Route::get('contacto', ['as' => 'pages.contact', function () {
    return view('pages.contact');
}]);

Route::get('signup', ['as' => 'pages.signup', function () {
    return view('pages.signup');
}]);

Route::get('login', ['as' => 'pages.login', function () {
    return view('pages.login');
}]);

Route::post('login',  [LoginController::class, 'login'])
    ->name('login');

Route::get('cart-count',  [CartController::class, 'cartCount'])
    ->name('cart.count');

Route::get('cart-products',  [CartController::class, 'cartUser'])
    ->name('cart.products');

Route::post('delete-cart', [CartController::class, 'delete'])->name('cart.delete');
