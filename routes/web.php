<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\TasksController;

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

//dashboardを表示する
Route::get('/', function () {
    return view('dashboard');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [TasksController::class, 'index']);
    Route::resource('tasks', TasksController::class);
});

// Route::get('/dashboard', function () {
//     return view('index');
// })->middleware(['auth'])->name('index');

require __DIR__.'/auth.php';
