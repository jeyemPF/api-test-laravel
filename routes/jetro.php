<?php

use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::get('/bola', function () {
    return 'Napakapogi mo Jireh Beleni';
});

Route::get('/hello', [UserController::class, 'store']);


Route::any('/updateUserInfo', function () {
    return 'This route accepts any HTTP verb';
});

Route::get('/users', function (Request $request) {
    return $request->email;
}); 



