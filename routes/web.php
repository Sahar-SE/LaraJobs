<?php

use Illuminate\Support\Facades\Route;

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

Route::get('list/', jobList::class, 'index')->name('list.index');
Route::get('list/{id}', jobList::class, 'show')->name('list.show');
Route::get('list/create', jobList::class, 'create')->name('list.create');

