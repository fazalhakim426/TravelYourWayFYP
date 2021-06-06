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
        Route::get(
            '/all_super_agents',
            [AgentController::class,'getAllSuperAgents']
            )->name('all_super_agents');

        Route::post(
            '/add_super_agent',
            [AgentController::class,'addSuperAgents'
            ])->name('add_super_agent');
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