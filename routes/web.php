<?php

use App\Http\Controllers\notaFiscal;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notaFiscal', [notaFiscal::class, 'index'])->name('notaFiscal.index');

