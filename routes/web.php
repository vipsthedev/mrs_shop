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
| These routes handle web-based requests for both users and admin.
| Includes pages for authentication, repair requests, staff, and inventory.
|--------------------------------------------------------------------------
*/

// =====================
// Public / Frontend Pages
// =====================

Route::get('/', fn() => view('frontend-themes/index'));
Route::get('/product-list', fn() => view('frontend-themes/product-list'));

// =====================
// Authentication
// =====================

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


// =====================
// User Routes
// =====================

// -- Mobile Repairing (User)
Route::prefix('mobile-repairing')->name('user-mobile-repairing.')->group(function () {
    Route::get('/', [MobileRepairingController::class, 'index'])->name('index');
    Route::get('/add', [MobileRepairingController::class, 'create'])->name('add');
    Route::post('/', [MobileRepairingController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [MobileRepairingController::class, 'edit'])->name('edit');
    Route::get('/{id}/show', [MobileRepairingController::class, 'show'])->name('show');
    Route::put('/{id}', [MobileRepairingController::class, 'update'])->name('update');
    Route::delete('/{id}', [MobileRepairingController::class, 'destroy'])->name('destroy');
});

// -- Laptop Repairing (User)
Route::prefix('laptop-repairing')->name('user-laptop-repairing.')->group(function () {
    Route::get('/', [LaptopRepairingController::class, 'index'])->name('index');
    Route::get('/add', [LaptopRepairingController::class, 'create'])->name('add');
    Route::post('/', [LaptopRepairingController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [LaptopRepairingController::class, 'edit'])->name('edit');
    Route::put('/{id}', [LaptopRepairingController::class, 'update'])->name('update');
    Route::delete('/{id}', [LaptopRepairingController::class, 'destroy'])->name('destroy');
});

// -- Accessories (User)
Route::prefix('user-accessories')->name('user-accessories.')->group(function () {
    Route::get('/', [AccessoryController::class, 'index'])->name('index');
    Route::get('/add', [AccessoryController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [AccessoryController::class, 'edit'])->name('edit');
    Route::put('/{id}', [AccessoryController::class, 'update'])->name('update');
    Route::delete('/{id}', [AccessoryController::class, 'destroy'])->name('destroy');
});

// -- Category (User)
Route::prefix('user-category')->name('user-category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/add', [CategoryController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

// -- Companies (User)
Route::prefix('user-companies')->name('user-companies.')->group(function () {
    Route::get('/', [CompnayController::class, 'index'])->name('index');
    Route::get('/add', [CompnayController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [CompnayController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CompnayController::class, 'update'])->name('update');
    Route::delete('/{id}', [CompnayController::class, 'destroy'])->name('destroy');
    Route::get('/show', [CompnayController::class, 'show'])->name('show');
});

// -- Accessories Special Actions
Route::get('/accessories/sales', [AccessoryController::class, 'salesAccessories'])->name('accessories.sales');
Route::get('/accessories/restock', [AccessoryController::class, 'restockAccessories'])->name('accessories.restock');


// =====================
// Admin Routes
// =====================

// -- Home Dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -- Google Maps Page
Route::get('/maps-gmap', [App\Http\Controllers\MapController::class, 'index'])->name('maps-gmap');

// -- Mobile Repairing (Admin)
Route::prefix('admin/mobile-repairing')->name('mobile-repairing.')->group(function () {
    Route::get('/', [MobileRepairingController::class, 'index'])->name('index');
    Route::get('/add', [MobileRepairingController::class, 'create'])->name('add');
    Route::post('/', [MobileRepairingController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [MobileRepairingController::class, 'edit'])->name('edit');
    Route::put('/{id}', [MobileRepairingController::class, 'update'])->name('update');
    Route::delete('/{id}', [MobileRepairingController::class, 'destroy'])->name('destroy');
});

// -- Accessories Special (Admin)
Route::get('/admin/accessories/sales', [AccessoryController::class, 'salesAccessories'])->name('admin.accessories.sales');
Route::get('/admin/accessories/restock', [AccessoryController::class, 'restockAccessories'])->name('admin.accessories.restock');

// -- Buy / Sales Item
Route::get('/buy-item', [App\Http\Controllers\BuyItemController::class, 'index'])->name('buy-item');
Route::get('/buy-item-add', [App\Http\Controllers\BuyItemController::class, 'create'])->name('buy-item-add');
Route::get('/sales-item', [App\Http\Controllers\SalesItemController::class, 'index'])->name('sales-item');
Route::get('/sales-item-add', [App\Http\Controllers\SalesItemController::class, 'create'])->name('sales-item-add');

// -- Staff Management
Route::prefix('staff')->name('staff.')->group(function () {
    Route::get('/', [StaffController::class, 'index'])->name('index');
    Route::get('/create', [StaffController::class, 'create'])->name('add');
    Route::post('/', [StaffController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [StaffController::class, 'edit'])->name('edit');
    Route::put('/{id}', [StaffController::class, 'update'])->name('update');
    Route::delete('/{id}', [StaffController::class, 'destroy'])->name('destroy');
});

// =====================
// Resourceful Routes (Fallback)
Route::resource('accessories', AccessoryController::class);
Route::resource('companies', CompnayController::class);
Route::resource('category', CategoryController::class);

// =====================
// (Optional) Future Grouping:
// Middleware groups like 'auth', 'admin', etc. can be applied here.
// =====================
