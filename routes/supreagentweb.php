<?php

use App\Http\Controllers\Agent\ManageSuperAgentController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAgent\TicketRequestController;
use App\Http\Controllers\SuperAgentController;

Route::middleware(['auth'])->group(function () {
Route::middleware(['verified'])->group(function () {

Route::middleware(['superagent'])->group(function(){
    
 Route::prefix('super-agent')
 ->group(function () {

    
     Route::get(
         '/dashboard',
         [SuperAgentController::class,'index']
        );

    Route::get(
        '/agents'
        ,[SuperAgentController::class,'get_agents']
        );

    Route::post(
        '/add_agent'
        ,[SuperAgentController::class,'add_agent']
        )->name('add_agent');
       
    Route::get(
        '/delete-agent/{agent}'
        ,[SuperAgentController::class,'delete_agent']
        )->name('delete-agent');
                
             //visa
             Route::get(
                '/immigrations',
                [SuperAgentController::class,'getImmigration']
                   );
    
            //visa
            Route::get(
                '/ummrahs',
                [SuperAgentController::class,'getUmmrahs']
                   );
            //visa
            Route::get(
                '/hajjs',
                [SuperAgentController::class,'getHajjs']
                   );
            //visa
            Route::get(
                '/visits',
                [SuperAgentController::class,'getVisits']
                   );
    
            Route::resources([
                'hotels' => HotelController::class,
                'posts' => HotelController::class,
            ]);

            Route::get(
                '/hotels-dashboard'
                ,[HotelController::class,'hotel_dashboard'])
            ->name('/hotels-dashboard');


            Route::get(
                '/add-room/{id}'
                ,[HotelController::class,'add_room'])
            ->name('add-room');
          
            Route::post(
                'room-store',
                [HotelController::class,'room_store']
                      )
            ->name('room-store');            
            
            Route::delete('room-destory/{id}',
            [HotelController::class,'room_destroy']
        )->name('room-destroy');
           



        //common action






        Route::get(
            'visa_cancel',
            [AgentController::class, 'cancel_visa']
        );

        Route::get(
            'ticket_cancel',
            [AgentController::class, 'cancel_ticket']
        );


        Route::get(
            'visa_revoke',
            [AgentController::class, 'revoke_visa']
        );

        Route::get(
            'ticket_revoke',
            [AgentController::class, 'revoke_ticket']
        );

     
        Route::get(
            'view-visa/{id}',
            [SuperAgentController::class, 'view_visa']
        );

        Route::get(
            'view-ticket/{id}',
            [SuperAgentController::class, 'view_ticket']
        );


            });        


    Route::get('/super-agent/tickets',[SuperAgentController::class,'get_tickets'])->name('/super-agent/tickets');   


    Route::resources([
        'ticketrequests' => TicketRequestController::class,
        'posts' => TicketRequestController::class,
    ]);  

    
    Route::resources([
        'mangaeagents' => ManageSuperAgentController::class,
        'posts' => ManageSSuperAgentController::class,
    ]);  




});
});
});