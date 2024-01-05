<?php


use App\Http\Controllers\MedicineController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/login', [StudentController::class,'loginAuth'])->name('login.auth');
Route::get('/login', [StudentController::class, 'AlreadyAccessed'])->name('login.deny');


Route::get('/error-permission', function(){
    return view('errors.permission');
})->name('error.permission');

Route::middleware(['IsLogin'])->group(function () {
    Route::get('/logout', [StudentController::class,'logout'])->name('logout');
    Route::get('/home', function () {
        return view('home');
    })->name('home.page');
});

Route::middleware(['IsLogin', 'IsAdmin'])->group(function() {
    Route::prefix('/medicine')->name('medicine.')->group(function(){
        Route::get('/create', [MedicineController::class, 'create'])->name('create');
        Route::post('/store', [MedicineController::class, 'store'])->name('store');
        Route::get('/', [MedicineController::class, 'index'])->name('home');
        Route::get('/home', [MedicineController::class, 'home'])->name('index');
        Route::get('/{id}', [MedicineController::class, 'edit'])->name('edit');
        Route::patch('/{id}', [MedicineController::class, 'update'])->name('update');
        Route::delete('/{id}', [MedicineController::class, 'destroy'])->name('delete');
        Route::get('/data/stock', [MedicineController::class, 'stock'])->name('stock');
        Route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
        Route::patch('/data/stock/{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');
    }); // /medicine/create

    Route::prefix('/student')->name('student.')->group(function(){
        Route::get('/create', [StudentController::class, 'create'])->name('create');
        Route::post('/store', [StudentController::class, 'store'])->name('store');
        Route::get('/', [StudentController::class, 'index'])->name('home');
        Route::get('/home', [StudentController::class, 'home'])->name('index');
        Route::get('/{id}', [StudentController::class, 'edit'])->name('edit');
        Route::patch('/{id}', [StudentController::class, 'update'])->name('update');
        Route::delete('/{id}', [StudentController::class, 'destroy'])->name('delete');
        Route::get('/data/role', [StudentController::class, 'role'])->name('role');
        Route::get('/data/role/{id}', [StudentController::class, 'roleEdit'])->name('role.edit');
        Route::patch('/data/role/{id}', [StudentController::class, 'roleUpdate'])->name('role.update');
    });
    Route::prefix('/order')->name('order.')->group(function(){
        Route::get('/data', [OrderController::class, 'data'])->name('data');
        Route::get('/export-excel', [OrderController::class, 'exportExcel'])->name('export-excel');
        Route::get('/download/{id}', [OrderController::class,'downloadPDF'])->name('download');
    });
});

Route::middleware(['IsLogin', 'IsKasir'])->group(function() {
    Route::prefix('/kasir')->name('kasir.')->group(function(){
        Route::get('/home', function () {
            return view('welcome');
        })->name('home');
        Route::prefix('/order')->name('order.')->group(function(){
            Route::get('/', [OrderController::class, 'index'])->name('index');
            Route::get('/create', [OrderController::class, 'create'])->name('create');
            Route::post('/store', [OrderController::class, 'store'])->name('store');
            Route::get('/print/{id}', [OrderController::class, 'show'])->name('print');
            Route::get('/download/{id}', [OrderController::class,'downloadPDF'])->name('download');
        });
    });
});

Route::middleware(['IsLogin','IsGuest'])->group(function(){
    Route::prefix('/guest')->name('guest.')->group(function(){
        Route::get('/home', function () {
            return view('welcome');
        })->name('home');
        Route::prefix('/order')->name('order.')->group(function(){

        });
    });
});
