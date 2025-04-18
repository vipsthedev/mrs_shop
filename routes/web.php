<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\CompnayController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MobileRepairingController;

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
Route::get('/', function () {
    return view('frontend-themes/index');
});

Route::get('/product-list', function () {
    return view('frontend-themes/product-list');
});
Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Redirect to login page after logout
})->name('logout');

//User part


//Admin Part
// home 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //map 
    Route::get('/maps-gmap', [App\Http\Controllers\MapController::class, 'index'])->name('maps-gmap');
    //mobile-repairing
    Route::get('/mobile-repairing', [MobileRepairingController::class, 'index'])->name('mobile-repairing.index');
    Route::get('/mobile-repairing-add', [MobileRepairingController::class, 'create'])->name('mobile-repairing-add');
    Route::post('mobile-repairing', [MobileRepairingController::class, 'store'])->name('mobile-repairing.store');
    Route::get('mobile-repairing/{id}/edit', [MobileRepairingController::class, 'edit'])->name('mobile-repairing.edit');
    Route::put('mobile-repairing/{id}', [MobileRepairingController::class, 'update'])->name('mobile-repairing.update');
    Route::delete('mobile-repairing/{id}', [MobileRepairingController::class, 'destroy'])->name('mobile-repairing.destroy');


    //Buy Item
    Route::get('/buy-item', [App\Http\Controllers\BuyItemController::class, 'index'])->name('buy-item');
    Route::get('/buy-item-add', [App\Http\Controllers\BuyItemController::class, 'create'])->name('buy-item-add');
    //Sales Item
    Route::get('/sales-item', [App\Http\Controllers\SalesItemController::class, 'index'])->name('sales-item');
    Route::get('/sales-item-add', [App\Http\Controllers\SalesItemController::class, 'create'])->name('sales-item-add');

    Route::get('staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('staff/create', [StaffController::class, 'create'])->name('staff-add');
    Route::post('staff', [StaffController::class, 'store'])->name('staff.store');
    Route::get('staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
    Route::put('staff/{id}', [StaffController::class, 'update'])->name('staff.update');
    Route::delete('staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');

    //custom method in resource 
    Route::get('/accessories/sales', [AccessoryController::class, 'salesAccessories'])->name('accessories.sales');

    Route::get('/accessories/restock', [AccessoryController::class, 'restockAccessories'])->name('accessories.restock');


Route::resource('accessories', AccessoryController::class);
Route::resource('companies', CompnayController::class);
Route::resource('category', CategoryController::class);

//product releated code


