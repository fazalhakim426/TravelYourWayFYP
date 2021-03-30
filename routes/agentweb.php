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


use App\Http\Controllers\VisaController;
use App\Http\Controllers\PaymentController;

Route::middleware(['auth'])->group(function () {

    
    Route::middleware(['verified'])->group(function () {


        Route::get('/agentdashboard', function () {

            $visas=DB::table('visas')->where('user_id','=',Auth::user()->id)->get();    
            return view('agent.dashboard')->with('visas',$visas)->with('i',0);;

        })->name('agentdashboard');


        Route::middleware(['agent'])->group(function(){

           
    
            
});
});
});