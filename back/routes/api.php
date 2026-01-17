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

Route::apiResource('credentials', App\Http\Controllers\CredentialController::class)
    ->only(['index', 'show'])
    ->parameter('credentials', 'credential');

Route::apiResource('slides', App\Http\Controllers\SlideController::class)
    ->only(['index', 'show'])
    ->parameter('slides', 'slide');

Route::apiResource('blogs', App\Http\Controllers\BlogController::class)
    ->only(['index', 'show'])
    ->parameter('blogs', 'blog');

Route::apiResource('countries', App\Http\Controllers\CountryController::class)
    ->only(['index', 'show'])
    ->parameter('countries', 'country');

Route::apiResource('reservations', App\Http\Controllers\ReservationController::class)
    ->only(['store', 'show'])
    ->parameter('reservations', 'reservation');

Route::apiResource('courseContents', App\Http\Controllers\CourseContentController::class)
    ->only(['index', 'show'])
    ->parameter('courseContent', 'courseContent');
