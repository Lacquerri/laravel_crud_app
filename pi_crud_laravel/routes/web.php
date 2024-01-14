<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {return view('welcome');})->name('index');
Route::get('/create', [PeopleController::class, 'create'])->name('people.create');
Route::post('/', [PeopleController::class, 'store'])->name('people.store');
Route::get('/people/list', [PeopleController::class, 'readall'])->name('people.list');
Route::get('/edit/{people:surname}/people/5', [PeopleController::class, 'edit'])->name('people.edit');
Route::put('/update/{people:surname}/people/5', [PeopleController::class, 'update'])->name('people.update');
Route::delete('/{people:surname}/people/5', [PeopleController::class, 'delete'])->name('people.delete');
Route::post('/people/list', [PeopleController::class, 'readpeople'])->name('people.readone');
Route::get('/view/{people:surname}/people/5', [PeopleController::class, 'viewpeople'])->name('people.view');

