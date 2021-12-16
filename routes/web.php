<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\projectController;

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
// Route::get('/slid', function () {
//     return view('slid');
// });
Route::get('/person', function () {
    return view('pagee');
});
Route::post('/store', [projectController::class, 'store'])
                 ->name('storep');
Route::get('/slid', [projectController::class, 'index'])
                 ->name('indexp');
Route::delete('/destroy/{id}', [projectController::class, 'destroy'])
                ->name('destroyp');
Route::get('/show/{id}', [projectController::class, 'show'])
                ->name('showp');
Route::get('/update/{id}/edit', [projectController::class, 'edit'])
                ->name('editp');
Route::put('/update/{id}', [projectController::class, 'update'])
                ->name('updatep');
Route::get('/search', [projectController::class, 'search'])
                ->name('search');

// Route::post('/store', ['App\Http\Controllers\projectController::class', 'store'])->name('StorePerson');
// Route::post('/store', 'app\Http\Controllers\projectController@store')->name('storep');
