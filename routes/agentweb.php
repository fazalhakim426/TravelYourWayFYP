<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Agent\TicketNotificationController;
use App\Http\Controllers\Agent\ManageSuperAgentController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HotelController;
Route::middleware(['auth'])->group(function () {

    
    Route::middleware(['verified'])->group(function () {

        Route::group([
            'prefix' => 'agent',
            'middleware'=>'agent'
        ], function () {

        Route::get(
            '/dashboard'
            ,[AgentController::class,'index']
            )->name('/agent/dashboard'); 

        //visa
        Route::get(
            '/immigrations',
            [AgentController::class,'getImmigration']
               );

        //visa
        Route::get(
            '/ummrahs',
            [AgentController::class,'getUmmrahs']
               );

        //visa
        Route::get(
            '/hajjs',
            [AgentController::class,'getHajjs']
               );

        //visa
        Route::get(
            '/visits',
            [AgentController::class,'getVisits']
               );

        Route::post(
            'ticket-apply-charges',
            [AgentController::class,'ticket_applay_charges']
                )->name('ticket-apply-charges');
    
         Route::post(
             'applycharges'
             ,[AgentController::class,'applycharges']
             )->name('applycharges');

    


        Route::get(
                'tickets'
                ,[AgentController::class,'tickets']
             );





             
        Route::get(
            'visa_cancel'
        ,[AgentController::class,'cancel_visa']);
       
        Route::get(
            'ticket_cancel'
        ,[AgentController::class,'cancel_ticket']);
       

        Route::get(
            'visa_revoke',
            [AgentController::class,'revoke_visa']
        );
       
        Route::get(
            'visa_ticket',
            [AgentController::class,'revoke_ticket']
        );
        });



        
// new work// 

              Route::resources([
                 'ticketnotifications' => TicketNotificationController::class,
                 'posts' => TicketNotificationController::class,
            ]);  
                
            Route::resources([
                'mangaesuperagents' => ManageSuperAgentController::class,
                'posts' => ManageSuperAgentController::class,
            ]);  
    
            Route::resources([
                'hotels' => HotelController::class,
                'posts' => HotelController::class,
            ]);

            Route::post('visa_assign_super_agent',[ManageSuperAgentController::class,'assign_to_visa'])->name('visa_assign_super_agent');
             
            Route::post('visa_assign_super_agent_store',[ManageSuperAgentController::class,'assign_to_visa_store'])->name('visa_assign_super_agent_store');
                     
            


            });
    });