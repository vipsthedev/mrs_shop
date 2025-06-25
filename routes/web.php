<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\CompnayController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MobileRepairingController;
use App\Http\Controllers\LaptopRepairingController;

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
    // mobile
    Route::get('/mobile-repairing', [MobileRepairingController::class, 'index'])->name('user-mobile-repairing.index');
    Route::get('/mobile-repairing-add', [MobileRepairingController::class, 'create'])->name('mobile-repairing-add');
    Route::post('mobile-repairing', [MobileRepairingController::class, 'store'])->name('mobile-repairing.store');
    Route::get('mobile-repairing/{id}/edit', [MobileRepairingController::class, 'edit'])->name('user-mobile-repairing.edit');
    Route::get('mobile-repairing/{id}/show', [MobileRepairingController::class, 'show'])->name('user-mobile-repairing.show');
    Route::put('mobile-repairing/{id}', [MobileRepairingController::class, 'update'])->name('mobile-repairing.update');
    Route::delete('mobile-repairing/{id}', [MobileRepairingController::class, 'destroy'])->name('user-mobile-repairing.destroy');

    // laptop
    Route::get('/laptop-repairing', [LaptopRepairingController::class, 'index'])->name('user-laptop-repairing.index');
    Route::get('/laptop-repairing-add', [LaptopRepairingController::class, 'create'])->name('laptop-repairing-add');
    Route::post('laptop-repairing', [LaptopRepairingController::class, 'store'])->name('laptop-repairing.store');
    Route::get('laptop-repairing/{id}/edit', [LaptopRepairingController::class, 'edit'])->name('user-laptop-repairing.edit');
    Route::put('laptop-repairing/{id}', [LaptopRepairingController::class, 'update'])->name('laptop-repairing.update');
    Route::delete('laptop-repairing/{id}', [LaptopRepairingController::class, 'destroy'])->name('user-laptop-repairing.destroy');

    //custom method in resource 
    Route::get('/accessories/sales', [AccessoryController::class, 'salesAccessories'])->name('accessories.sales');

    Route::get('/accessories/restock', [AccessoryController::class, 'restockAccessories'])->name('accessories.restock');

    // category

    Route::get('user-category', [CategoryController::class, 'index'])->name('user-category.index');
    Route::get('user-add-category', [CategoryController::class, 'create'])->name('user-add-category.create');
    Route::delete('user-category/{id}', [CategoryController::class, 'destroy'])->name('user-category.destroy');
    Route::get('user-show-category', [CategoryController::class, 'create'])->name('user-add-category.show');
    Route::get('user-category/{id}/edit', [CategoryController::class, 'edit'])->name('user-category.edit');
    Route::put('user-category/{id}', [CategoryController::class, 'update'])->name('category.update');

    //accessories
    Route::get('user-accessories', [AccessoryController::class, 'index'])->name('user-accessories.index');
    Route::get('user-add-accessories', [AccessoryController::class, 'create'])->name('user-add-accessories.create');
    Route::delete('user-accessories/{id}', [AccessoryController::class, 'destroy'])->name('user-accessories.destroy');
    Route::get('user-accessories/{id}/edit', [AccessoryController::class, 'edit'])->name('user-accessories.edit');
    Route::put('user-accessories/{id}', [AccessoryController::class, 'update'])->name('user-accessories.update');

    //companies
    Route::get('user-companies', [CompnayController::class, 'index'])->name('user-companies.index');
    Route::get('user-add-companies', [CompnayController::class, 'create'])->name('user-add-companies.create');
    Route::get('user-show-companies', [CompnayController::class, 'show'])->name('user-add-companies.show');
    Route::delete('user-companies/{id}', [CompnayController::class, 'destroy'])->name('user-companies.destroy');
    Route::get('user-companies/{id}/edit', [CompnayController::class, 'edit'])->name('user-companies.edit');
    Route::put('user-companies/{id}', [CompnayController::class, 'update'])->name('user-companies.update');

    

//Admin Part
// home 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //map 
    Route::get('/maps-gmap', [App\Http\Controllers\MapController::class, 'index'])->name('maps-gmap');
    //mobile-repairing
    Route::get('/admin/mobile-repairing', [MobileRepairingController::class, 'index'])->name('mobile-repairing.index');
    Route::get('/admin//mobile-repairing-add', [MobileRepairingController::class, 'create'])->name('mobile-repairing-add');
    Route::post('mobile-repairing', [MobileRepairingController::class, 'store'])->name('mobile-repairing.store');
    Route::get('/admin/mobile-repairing/{id}/edit', [MobileRepairingController::class, 'edit'])->name('mobile-repairing.edit');
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
    Route::get('/admin/accessories/sales', [AccessoryController::class, 'salesAccessories'])->name('admin.accessories.sales');

    Route::get('/admin/accessories/restock', [AccessoryController::class, 'restockAccessories'])->name('admin.accessories.restock');


Route::resource('accessories', AccessoryController::class);
Route::resource('companies', CompnayController::class);
Route::resource('category', CategoryController::class);

//product releated code


