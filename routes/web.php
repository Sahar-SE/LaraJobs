<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobListController;

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

Route::get('/', [jobListController::class, 'index'])->name('list.index');
Route::get('list/{id}', [jobListController::class, 'show'])->name('list.show');
Route::get('list/create', [jobListController::class, 'create'])->name('list.create');
Route::get('list/{id}/edit', [jobListController::class, 'edit'])->name('list.edit');
Route::get('list/{id}/delete', [jobListController::class, 'delete'])->name('list.delete');

