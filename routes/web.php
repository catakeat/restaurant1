<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;

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

Route::get('/welcome1', function () {
    return view('welcome1');
});
Route::post("/welcome1",function(){
    return view("welcome1");
});
Route::get("/home",[RestoController::class,'index']);
Route::get("/lista",[RestoController::class,'list']);

