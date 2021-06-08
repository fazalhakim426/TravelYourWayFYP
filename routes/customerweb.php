<?php


use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\VisaController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TicketPassengerController;


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
Route::get('destroyPassenger/{id}',[TicketPassengerController::class,'destroy']);
Route::post('/addTicketPassenger',[TicketPassengerController::class,'store'])->name('addTicketPassenger');
Route::post('/ticketSelectAgent',[TicketController::class,'ticketSelectAgent'])->name('ticketSelectAgent');
Route::post('/ticketStoreAgent',[TicketController::class,'ticketStoreAgent'])->name('ticketStoreAgent');

//passenger
Route::get('/agentIndex',[VisaController::class,'agentIndex']);
Route::post('/selectAgent',[VisaController::class,'selectAgent'])->name('selectAgent');

    // //pessenger
    // Route::post('/store4',[VisaController::class,'store4'])->name('store4');
    // Route::get('/create4',[VisaController::class,'create4']);


    // //step 3
    // Route::post('/store5',[VisaController::class,'store5'])->name('store5');
    // Route::get('/create5',[VisaController::class,'create5']);

    // Route::get('/edit0',[VisaController::class,'edit0']);
    // Route::post('/update',[VisaController::class,'update'])->name('update');

    // Route::get('/edit1',[VisaController::class,'edit1']);
    // Route::post('/update1',[VisaController::class,'update1'])->name('update1');

    // Route::get('/edit2',[VisaController::class,'edit2']);
    // Route::post('/update2',[VisaController::class,'update2'])->name('update2');

    // Route::get('/edit3',[VisaController::class,'edit3']);
    // Route::post('/update3',[VisaController::class,'update3'])->name('update3');

    // Route::get('/edit4',[VisaController::class,'edit4']);
    // Route::post('/update4',[VisaController::class,'update4'])->name('update4');

    // Route::get('/edit5',[VisaController::class,'edit5']);
    // Route::post('/update5',[VisaController::class,'update5'])->name('update5');


    //     Route::get('/visas2',function(){
    //         return view('userdashboard.immigration_apply.immigration_visa_step_2');
    //     });
    //     Route::get('/visas3',function(){
    //         return view('userdashboard.immigration_apply.immigration_visa_step_3');
    //     });
    //     Route::get('/visas4',function(){
    //         return view('userdashboard.immigration_apply.immigration_visa_step_4');
    //     });
    
    //     Route::get('/visas5',function(){
    //         return view('userdashboard.immigration_apply.immigration_visa_step_5');
    //     });

});

});
});
});
});