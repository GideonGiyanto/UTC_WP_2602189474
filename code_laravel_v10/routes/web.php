<?php

use App\Http\Controllers\SubjectController;
use App\Models\Subject;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [SubjectController::class, 'index'])->name('subject.index');
Route::get('/{id}/index', [SubjectController::class, 'indexByCategory'])->name('subject.indexByCategory');
Route::get('/{id}/subject_detail', [SubjectController::class, 'detail'])->name('subject.detail');
Route::get('/writer', [SubjectController::class, 'writer'])->name('subject.writer');
Route::get('/about', [SubjectController::class, 'about'])->name('subject.about');
