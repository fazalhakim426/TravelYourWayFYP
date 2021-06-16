<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\CountryAPIController;
use App\Http\Controllers\api\AllApplyAPIController;
use App\Http\Controllers\api\TicketAPIController;
use App\Http\Controllers\api\VisaAPIController;
use App\Http\Controllers\api\Login;
use App\Http\Controllers\api\AgentAPIController;
use App\Http\Controllers\api\CustomerAPIController;
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
Rout:

Route::apiResources([
    'tickets' => TicketAPIController::class,
    'post'=>TicketAPIController::class,
]);  
Route::post('ticket_passenger',[TicketAPIController::class,'ticket_passenger']);
Route::get('userTickets/{id}',[TicketAPIController::class,'getAll']);

Route::apiResources([
    'visas' => VisaAPIController::class,
    'post'=>VisaAPIController::class,
]);

Route::apiResources([
    'visas' => VisaAPIController::class,
    'post'=>VisaAPIController::class,
]);
Route::get('userVisas/{id}',[VisaAPIController::class,'getAll']);

Route::apiResources([
    'AllApplies' => AllApplyAPIController::class,
]); 

Route::get('/AllApplies/{id}/applied',[AllApplyAPIController::class,'applied']);


Route::get('/getAgent',[AgentAPIController::class,'getAgent']);

//

Route::post('/login', [Login::class, 'login']);


Route::get('/login/user/{id}', [Login::class, 'get_user_detail']);


Route::post('/register', [Login::class, 'register']);
Route::post('/edit_profile', [Login::class, 'edit_profile']);



Route::apiResources([
    'countries' => CountryAPIController::class,
]);  

Route::get('/state/{id}', [CountryAPIController::class, 'get_states']);//country id required
Route::get('/city/{id}', [CountryAPIController::class, 'get_cities']);//state id required


Route::get('/get_hotels', [CountryAPIController::class, 'get_hotels']);

Route::get('/hotels/{id}/country', [CountryAPIController::class, 'get_country_hotels']);
Route::get('/hotels/{id}/state', [CountryAPIController::class, 'get_state_hotels']);
Route::get('/hotels/{id}/city', [CountryAPIController::class, 'get_city_hotels']);


Route::get('/rooms/{id}', [CountryAPIController::class, 'get_rooms']);

Route::get('/count_status/{id}', [CustomerAPIController::class, 'count_status']);
Route::post('/room/booking/payment', [CustomerAPIController::class, 'booking_payment']);
Route::post('/room/booking/payment/byhand', [CustomerAPIController::class, 'booking_payment_by_hand']);

Route::post('/available_room', [CustomerAPIController::class, 'available_room']);



Route::post('/visa/payment', [CustomerAPIController::class, 'visa_payment']);
Route::post('/ticket/payment', [CustomerAPIController::class, 'ticket_payment']);


// Route::group(['prefix' => 'api', 'middleware' => 'throttle:3,10'], function () {
 
//     });
