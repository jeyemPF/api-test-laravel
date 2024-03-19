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

// GET Method
Route::get('/users', function (){
    return "This is /users but in version2";
});

// POST Method
Route::post('/register' , function () {
    return "register: POST request from v2";
});

// PUT
Route::put('/update/{id}' , function () {
    return "register: PUT request from v2";
});

// PATCH
Route::patch('/updatev2/{id}' , function () {
    return "update: PATCH request from v2";
});
// DELETE
Route::delete('/updatev2/{id}' , function () {
    return "update: DELETE request from v2";
});
// ANY
Route::any('/updatev2/{id}', function ($id) {
    return "update: ANY request from v2 for ID: $id";
});
// MATCH
Route::match(['get', 'post'], '/example', function () {
    return 'This route responds to both GET and POST requests.';
});
