<?php

use App\Http\Controllers\Auth\AccessTokenController;
use App\Http\Controllers\ReservationController;
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

//Login 
Route::get('tokens', [AccessTokenController::class, 'index']);
Route::delete('tokens', [AccessTokenController::class, 'destroyAll']);
Route::post('login', [AccessTokenController::class, 'store']);
Route::post('logout', [AccessTokenController::class, 'destroy']);

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

// STORE protegido
Route::post('reservations', [ReservationController::class, 'store']);
// ->middleware('throttle:reservations-store');

// SHOW sin límite
Route::get('reservations/{reservation}', [ReservationController::class, 'show']);

Route::apiResource('courseContents', App\Http\Controllers\CourseContentController::class)
    ->only(['index', 'show'])
    ->parameter('courseContent', 'courseContent');

Route::apiResource('mediosPagos', App\Http\Controllers\MedioPagoController::class)
    ->only(['index', 'show'])
    ->parameter('mediosPagos', 'medioPago');

Route::apiResource('stats', App\Http\Controllers\StatsController::class)
    ->only(['index', 'show'])
    ->parameter('stats', 'stat');

Route::apiResource('courses', App\Http\Controllers\CourseController::class)
    ->only(['index', 'show'])
    ->parameter('courses', 'course');
