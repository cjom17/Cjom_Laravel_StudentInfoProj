<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInformationController;

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

Route::get('student_information', [StudentInformationController::class, 'index']);
Route::post('student_information', [StudentInformationController::class, 'store']);
Route::get('student_information/{id}', [StudentInformationController::class, 'show']);
Route::put('student_information/{id}', [StudentInformationController::class, 'update']);
Route::delete('student_information/{id}', [StudentInformationController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});