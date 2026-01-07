<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('learnings', App\Http\Controllers\LearningController::class)
    ->only(['index', 'show'])
    ->parameter('learnings', 'learning');

Route::apiResource('methodologies', App\Http\Controllers\MethodologyController::class)
    ->only(['index', 'show'])
    ->parameter('methodologies', 'methodology');

Route::apiResource('footers', App\Http\Controllers\FooterController::class)
    ->only(['index', 'show'])
    ->parameter('footers', 'footer');

Route::apiResource('instructors', App\Http\Controllers\InstructorController::class)
    ->only(['index', 'show'])
    ->parameter('instructors', 'instructor');
