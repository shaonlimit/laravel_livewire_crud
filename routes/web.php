<?php

use App\Livewire\TodoCreate;
use App\Livewire\TodoEdit;
use App\Livewire\TodoView;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('todo.home');

Route::get('/todo/create', TodoCreate::class);
Route::get('/todo/view/{id}', TodoView::class);
Route::get('/todo/edit/{todo}', TodoEdit::class);
