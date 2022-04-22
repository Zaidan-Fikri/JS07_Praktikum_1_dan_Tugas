<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/data/search', function () {
    $search = request('search');
            $mahasiswa = DB::table('mahasiswa')->where('nama', 'like', '%' . $search . '%')->paginate(5);
            return view('mahasiswa.index', compact('mahasiswa'));        
});

Route::get('nilai/{nim}', [MahasiswaController::class, 'nilai'])->name('mahasiswa.nilai');

Route::resource('articles', ArticleController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);