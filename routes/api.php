<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\CountryAPIController;
use App\Http\Controllers\api\AllApplyAPIController;
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

Route::apiResources([
    'countries' => CountryAPIController::class,
]);  
Route::apiResources([
    'AllApplies' => AllApplyAPIController::class,
]); 

Route::get('/AllApplies/{id}/applied',[AllApplyAPIController::class,'applied']);