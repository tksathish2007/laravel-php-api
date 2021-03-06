<?php

// use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::middleware('api-cors')->group(function(){
	Route::post('login','Api\Users@login');
	Route::post('register','Api\Users@register');
// });

Route::prefix('user')->middleware(['api-auth'])->group(function () {
    	// return $request->user();
    	// Route::get('test','Api\Dashboard@test');
    	Route::get('/','Api\Dashboard@getUserData');
    	Route::put('/update-profile','Api\Dashboard@updateUserData');
    	Route::delete('/delete-profile','Api\Dashboard@deleteUserData');
});