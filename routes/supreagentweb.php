<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationRequestController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SuperAgent\TicketRequestController;
use App\Http\Controllers\SuperAgent\ManageAgentController;
use App\Http\Controllers\HotelController;

use App\Http\Controllers\VisaController;
use App\Http\Controllers\PaymentController;

Route::middleware(['auth'])->group(function () {
Route::middleware(['verified'])->group(function () {

Route::middleware(['superagent'])->group(function(){
    
 
    Route::get('/superagentdashboard', function () {
        $visas=DB::table('visas')->where('super_agent_id','=',Auth::user()->id)->get();    
        
        return view('super_agent.dashboard')->with('visas',$visas)->with('i',0);;
    })->middleware('address')->name('superagentdashboard');

    
   
    Route::resources([
        'ticketrequests' => TicketRequestController::class,
        'posts' => TicketRequestController::class,
    ]);  

    
    Route::resources([
        'mangaeagents' => ManageAgentController::class,
        'posts' => ManageSAgentController::class,
    ]);  

    // Route::resources([
    //     'hotels' => HotelController::class,
    //     'posts' => HotelController::class,
    // ]);



});
});
});