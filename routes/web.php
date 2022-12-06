<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    GuruController,
    ArtikelController,
    HomeController,
    LokerController
};
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

Auth::routes();

// user perlu login untuk mengakses
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        if (auth()->user()->hasRole('admin')) {
            return redirect()->route('admin.index');
        } else {
            return view('home');
        }
    })->name('home');

    Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
    Route::post('/profil', [HomeController::class, 'updateProfil'])->name('updateProfil');

    // user harus memiliki role admin atau guru untuk mengakses
    Route::middleware('role:admin|guru')->group(function () {
        route::resource('/artikel', ArtikelController::class)->except('index', 'show');
        route::resource('/loker', LokerController::class)->except('index', 'show');
    });

    // user harus memiliki role admin untuk mengakses
    Route::middleware('role:admin')->group(function () {
        route::resource('/guru', GuruController::class)->except('index', 'show');

        Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/guru', 'guru')->name('guru');
            Route::get('/artikel', 'artikel')->name('artikel');
            Route::get('/loker', 'loker')->name('loker');
            Route::get('/profil', 'profil')->name('profil');
        });

        Route::post('/guru/export', [GuruController::class, 'export'])->name('guru.export');
        Route::post('/guru/export/pdf', [GuruController::class, 'pdf'])->name('guru.pdf');
    });
});

Route::get('/', function () {
    return view('pages.home');
})->name('index');

Route::prefix('kompetensi')
    ->name('kompetensi.')
    ->group(function () {
        Route::get('/pemrograman-dasar', function () {
            return view('pages.komli.pemrograman-dasar');
        })->name('pemrograman-dasar');

        Route::get('/komputer-dan-jaringan-dasar', function () {
            return view('pages.komli.komputer-dan-jaringan-dasar');
        })->name('komputer-dan-jaringan-dasar');

        Route::get('/dasar-desain-grafis', function () {
            return view('pages.komli.dasar-desain-grafis');
        })->name('dasar-desain-grafis');

        Route::get('/sistem-komputer', function () {
            return view('pages.komli.sistem-komputer');
        })->name('sistem-komputer');

        Route::get('/pemodelan-perangkat-lunak', function () {
            return view('pages.komli.pemodelan-perangkat-lunak');
        })->name('pemodelan-perangkat-lunak');

        Route::get('/database', function () {
            return view('pages.komli.database');
        })->name('database');

        Route::get('/web-programming', function () {
            return view('pages.komli.web-programming');
        })->name('web-programming');

        Route::get('/object-oriented-programming', function () {
            return view('pages.komli.object-oriented-programming');
        })->name('object-oriented-programming');

        Route::get('/mobile-programming', function () {
            return view('pages.komli.mobile-programming');
        })->name('mobile-programming');

        Route::get('/kewirausahaan', function () {
            return view('pages.komli.kewirausahaan');
        })->name('kewirausahaan');
    });

Route::get('admin-page', function () {
    return 'Halaman untuk Admin';
})->middleware('role:admin')->name('admin.page');

Route::get('guru-page', function () {
    return 'Halaman untuk Guru';
})->middleware('role:guru')->name('guru.page');

Route::controller(ArtikelController::class)->prefix('artikel')->name('artikel.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/search', 'search')->name('search');
    Route::get('/{slug}', 'show')->name('show');
    Route::get('/category/{kategori}', 'category')->name('category');
    Route::get('/author/{user_id}', 'byAuthor')->name('author');
});

Route::controller(GuruController::class)->prefix('guru')->name('guru.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

Route::controller(LokerController::class)->prefix('loker')->name('loker.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});
