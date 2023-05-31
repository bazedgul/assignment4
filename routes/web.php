<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;





Route::get('/assignments', [AssignmentController::class, 'create'])->name('assignments.create');
Route::post('/assignments', [AssignmentController::class, 'store'])->name('assignments.store');


// Route::get('/', function () {
//     return view('welcome');
// });
