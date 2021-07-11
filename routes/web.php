<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\VisaController;
use App\Models\SuperAgent;
use App\Models\Agent;
use App\Models\Room;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
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

Route::get('/generate-countries', [CountryController::class, 'create']);
Route::get('/', function () {
    // return view('livewire');
    $data['agents']=User::where('userable_type','App\Models\Agent')->limit(3)->get();
    $data['rooms']=Room::with('hotel')->limit(4)->get();
    // dd($data['room']);
 
//    $data['sub_active']="home";

    return view('welcome',$data);
});

Route::get('hotel',[HotelController::class,'index']);

Route::get('about_us',function(){
    $data['super_agents']=SuperAgent::limit(3)->get();
    $data['agents']=User::where('userable_type','App\Models\Agent')->limit(3)->get();
    return view('about_us',$data);
});
Route::get('contact_us',function(){
    return view('contact_us');
});
Route::get('hotelIndex',[HotelController::class,'hotel']);

Route::get('/dashboard', function () {
    $visas = DB::table('visas')->where('user_id', '=', Auth::user()->id)->get();

    return view('userdashboard.dashboard')->with('visas', $visas)->with('i', 0);
})->middleware(['auth'])->middleware('verified')->middleware('address')->middleware('membership')->name('dashboard');



Route::get(
    'dependent-dropdown',
    [DropdownController::class, 'index']
);
Route::post(
    'api/fetch-states',
    [DropdownController::class, 'fetchState']
);
Route::post(
    'api/fetch-cities',
    [DropdownController::class, 'fetchCity']
);
Route::post(
    'api/fetch-hotels',
    [DropdownController::class, 'fetchHotel']
);

Route::post(
    'api/fetch-hotel-rooms',
    [DropdownController::class, 'fetchHotelRooms']
);

Route::get('stripe',[StripePaymentController::class,'stripe']);


Route::post('stripe', [StripePaymentController::class,'stripePost'])->name('stripe.post');


Route::post('stripe.visa', [StripePaymentController::class,'stripeVisaPost'])->name('stripe.visa.post');


Route::post('stripe.ticket', [StripePaymentController::class,'stripeTicketPost'])->name('stripe.ticket.post');




        
Route::post(
    'ticket-apply-charges',
    [TicketController::class, 'applyTicketCharges']
)->name('ticket-apply-charges');

Route::get('download-visa-document/{id}',
      [VisaController::class,'downloadVisaDocument'])
      ->name('download-visa-document');

      Route::get('download-ticket-document/{id}',
      [TicketController::class,'downloadVisaDocument'])
      ->name('download-ticket-document');

Route::post(
    'visa-apply-charges',
    [VisaController::class, 'applyVisacharges']
)->name('visa-apply-charges');






Route::post(
    'ticket-upload-documents',
    [TicketController::class, 'ticketUploadDocuments']
)->name('ticket-upload-documents');

Route::post(
    'visa-upload-documents',
    [VisaController::class, 'visaUploadDocuments']
)->name('visa-upload-documents');


Route::get('/contact',
 [ContactController::class, 'createForm']);

Route::post('/contact', [ContactController::class, 'ContactUsForm'])->name('contact.store');

require __DIR__ . '/customerweb.php';
require __DIR__ . '/agentweb.php';
require __DIR__ . '/supreagentweb.php';

require __DIR__ . '/auth.php';
require __DIR__ . '/adminweb.php';
