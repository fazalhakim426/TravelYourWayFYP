<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PassengerController;


Route::middleware(['auth'])->group(function () {
    Route::middleware(['verified'])->group(function () {
  Route::middleware(['address'])->group(function(){
 Route::middleware(['customer'])->group(function(){
Route::prefix('customer')->group(function(){

    Route::get('/dashboard',[CustomerController::class,'index'])->name('dashboard');

 Route::resources([
            'visas' => VisaController::class,
            'posts' => VisaController::class,
        ]);
           
        Route::resources([
            'tickets' => TicketController::class,
            'posts' => TicketController::class,
        ]);

        
        Route::get('apply/{type}',[VisaController::class,'index2']);

        Route::get('visa_payments/{charges}',[CustomerController::class,'pay_visa_charges']);
        Route::get('done_visa/{charges}',[CustomerController::class,'done_visa']);


        Route::get(
            'ticket_payments/{charges}',
            [CustomerController::class,'pay_ticket_charges']
                  );

        Route::get(
        'done_ticket/{charges}'
        ,[CustomerController::class,'done_ticket']
    
        );



             
        Route::get(
            'visa_cancel'
        ,[AgentController::class,'cancel_visa']);
       
        Route::get(
            'ticket_cancel'
        ,[AgentController::class,'cancel_visa']);
       

        Route::get(
            'visa_revoke',
            [AgentController::class,'revoke_visa']
        );
       
        Route::get(
            'visa_ticket',
            [AgentController::class,'revoke_ticket']
        );
       

       


        
});
//mange agent
   

        
Route::middleware(['customer'])->group(function(){
        
        //Contact Information 
            Route::get('/contactInformationIndex',[VisaController::class,'contactInformationIndex']);
            Route::post('/contactInformationStore',[VisaController::class,'contactInformationStore'])->name('contactInformationStore');

//Contact Information 
Route::get('/personalInformationIndex',[VisaController::class,'personalInformationIndex']);
Route::post('/personalInformationStore',[VisaController::class,'personalInformationStore'])->name('personalInformationStore');
    
Route::post('/storeupdate',[VisaController::class,'storeupdate'])->name('storeupdate');
Route::post('/ticketIncomplete',[TicketController::class,'ticketIncomplete'])->name('ticketIncomplete');
Route::get('/ticketTripDetailIndex',[TicketController::class,'ticketTripDetailIndex']);
Route::post('/ticketTripDetailStore',[TicketController::class,'ticketTripDetailStore'])->name('ticketTripDetailStore');

Route::get('/ticketPassengerIndex',[TicketController::class,'ticketPassengerIndex']);
//adding passenger 
Route::get('destroyPassenger/{id}',[PassengerController::class,'destroy_ticket_passenger']);
Route::post('/addTicketPassenger',[PassengerController::class,'store_ticket_passenger'])->name('addTicketPassenger');
Route::post('/ticketSelectAgent',[TicketController::class,'ticketSelectAgent'])->name('ticketSelectAgent');
Route::post('/ticketStoreAgent',[TicketController::class,'ticketStoreAgent'])->name('ticketStoreAgent');

//passenger
Route::get('/agentIndex',[VisaController::class,'agentIndex']);
Route::post('/selectAgent',[VisaController::class,'selectAgent'])->name('selectAgent');


});

});
});
});
});