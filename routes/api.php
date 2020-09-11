<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('client')->get('/all-user', function () {
    return User::all();
});

Route::post('login', function () {
    $user = App\User::find(request('id'));
    $token = $user->createToken('Token Name');

    return [
        "token_type" => "Bearer",
        "access_token" => $token->accessToken,
    ];
});