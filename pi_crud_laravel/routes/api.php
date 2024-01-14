<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/students/add', [apiController::class, 'create'])->name('people.createnew');
Route::get('/students/list', [apiController::class, 'showall'])->name('people.showall');
Route::get('/view/people/{id}', [apiController::class, 'showbyid'])->name('people.viewone');
Route::put('/update/people/{id}', [apiController::class, 'updatebyid'])->name('people.updatebyid');
Route::delete('/delete/people/{id}', [apiController::class, 'deletebyid'])->name('people.deletebyid');

