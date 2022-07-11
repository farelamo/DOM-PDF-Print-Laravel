<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/pegawai', [EmployeeController::class, 'index']);
Route::get('/pegawai/print-pdf', [EmployeeController::class, 'print_pdf']);
