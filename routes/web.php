<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\TasklistsController;

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

//Controller ( TasklistsController@index ) を経由してdashboardを表示する
Route::get('/', [TasklistsController::class, 'index']);

Route::get('/dashboard', [TasklistsController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', UsersController::class, ['only' => ['index', 'show']]);
    Route::resource('tasklists', TasklistsController::class, ['only' => ['store', 'destroy']]);
});