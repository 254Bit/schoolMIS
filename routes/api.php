<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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
Route::post('/create-Course',[CourseController::class,'createCourse']);
Route::get('/getCourses',[CourseController::class,'readAllCourses']);
// TO GET A SINGLE COURSE
Route::get('/getCourse/{id}',[CourseController::class,'readCourse']);
Route::put('/update-Course/{id}',[CourseController::class,'updateCourse']);

Route::delete('/delete-Course/{id}',[CourseController::class,'deleteCourse']);
