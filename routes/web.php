<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CarController2;
use App\Http\Controllers\SudentControoler;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

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

Route::get('/blog',[BlogPostController::class,'index']);
// {blogPost} is called a wildcard
Route::get('/blog/{blogPost}',[BlogPostController::class,'show']);
Route::get('/blog/create/post',[BlogPostController::class,'create']);
Route::post('/blog/create/post',[BlogPostController::class, 'store']);


Route::get('/car/{car_id}',[CarController2::class,'show']);
Route::get('/car/create/post',[CarController2::class, 'create']);/* عرض الفورم */
Route::post('/car/create/post',[CarController2::class, 'store']);/* للتخزين */
Route::get('/car/',[CarController2::class,'index']);
Route::get('/car/{car_id}/edit',[CarController2::class, 'edit']);/* جلب الفورم*/
Route::put('/car/{car_id}/edit',[CarController2::class, 'update']);/* put : للتعديل*/
Route::delete('/car/{car_id}',[CarController2::class,'destroy']);


Route::get('/student/{student_id}',[SudentControoler::class,'show']);
Route::get('/student/',[SudentControoler::class,'index']);
Route::get('/student/create/post',[SudentControoler::class, 'create']);/* عرض الفورم */
Route::post('/student/create/post',[SudentControoler::class, 'store']);
//Route::get('/student/create/post',[SudentControoler::class,'show']);



