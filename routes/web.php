<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CartController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/filter', 'FilterController@index')->name('filter.index');

});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/cart', [CartController::class, 'showCart'])->name('winkelwagen.index');

    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

    Route::patch('/cart/update/{cartItem}', [CartController::class, 'updateCart'])->name('cart.update');

    Route::delete('/cart/remove/{cartItem}', [CartController::class, 'removeFromCart'])->name('cart.remove');





});

require __DIR__.'/auth.php';
