<?php

use App\Http\Controllers\LateController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/', function () {
    return view('login');
})->name('login');

Route::middleware('IsGuest')->group(function () {
    Route::get('/', function () {
        return view('login');
    })->name('login');
});

Route::middleware('IsLogin')->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/error-permission', function () {
    return view('errors.permission');
})->name('error.permission');

Route::middleware(['IsLogin', 'IsAdmin'])->group(function () {
    Route::get('/home', function () {
        return view('pages.admin.home');
    })->name('home.page');


    Route::prefix('/rombel')->name('rombel.')->group(function () {
        Route::get('/', [RombelController::class, 'index'])->name('home');
        Route::get('/create', [RombelController::class, 'create'])->name('create');
        Route::post('/store', [RombelController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [RombelController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [RombelController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [RombelController::class, 'destroy'])->name('delete');
    });

    Route::prefix('/rayon')->name('rayon.')->group(function () {
        Route::get('/', [RayonController::class, 'index'])->name('home');
        Route::get('/create', [RayonController::class, 'create'])->name('create');
        Route::post('/store', [RayonController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [RayonController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [RayonController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [RayonController::class, 'destroy'])->name('delete');
    });

    Route::prefix('/student')->name('student.')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('home');
        Route::get('/create', [StudentController::class, 'create'])->name('create');
        Route::post('/store', [StudentController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [StudentController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');
    });

    Route::prefix('/user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('home');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
    });

    Route::prefix('/late')->name('late.')->group(function () {
        Route::get('/', [LateController::class, 'index'])->name('home');
        Route::get('/show/{id}', [LateController::class, 'show'])->name('show');
        Route::get('/rekap', [LateController::class, 'rekap'])->name('rekap');
        Route::get('/create', [LateController::class, 'create'])->name('create');
        Route::post('/store', [LateController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [LateController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [LateController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [LateController::class, 'destroy'])->name('delete');
        Route::get('/print/{id}', [LateController::class, 'print'])->name('print');
        Route::get('/download/{id}', [LateController::class, 'downloadPDF'])->name('download');
        Route::get('/export', [LateController::class, 'export'])->name('export');
    });
});

Route::middleware(['IsLogin', 'IsPs'])->group(function () {
    Route::prefix('/ps')->name('pemb.')->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboardPs'])->name('ps.home');

        Route::prefix('/student')->name('student.')->group(function () {
            Route::get('/', [StudentController::class, 'indexPs'])->name('home');
        });

        Route::prefix('/late')->name('late.')->group(function () {
            Route::get('/', [LateController::class, 'indexPs'])->name('home');
            Route::get('/show/{id}', [LateController::class, 'show'])->name('show');
            Route::get('/rekap', [LateController::class, 'rekapPs'])->name('rekap');
            Route::get('/print/{id}', [LateController::class, 'print'])->name('print');
            Route::get('/download/{id}', [LateController::class, 'downloadPDF'])->name('download');
            Route::get('/export', [LateController::class, 'export'])->name('export');
        });
    });
});
