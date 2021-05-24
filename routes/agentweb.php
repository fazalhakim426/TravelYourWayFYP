<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Agent\TicketNotificationController;
use App\Http\Controllers\Agent\ManageSuperAgentController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\PaymentController;

Route::middleware(['auth'])->group(function () {

    
    Route::middleware(['verified'])->group(function () {
        Route::middleware(['agent'])->group(function(){  

        Route::get('/agentdashboard', function () {

            $visas=DB::table('visas')->where('agent_id','=',Auth::user()->id)->orderBy('status')->get();    
            return view('agent.dashboard')->with('visas',$visas)->with('i',0);;
              })->name('agentdashboard'); 

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
    });