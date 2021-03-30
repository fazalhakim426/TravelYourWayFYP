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
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;

Route::middleware(['auth'])->group(function () {

    
    Route::middleware(['verified'])->group(function () {

        Route::get('/customerdashboard', function () {
            $visas=DB::table('visas')->where('user_id','=',Auth::user()->id)->get();
            return view('customer.dashboard')->with('visas',$visas);
        
        })->middleware('address')->middleware('customer')->name('dashboard');
        
        

        

        Route::middleware(['customer'])->group(function(){

    
        
        // Route::get('/immigrationvisa0',function(){
        //     return view('userdashboard.immigration_apply.immigration_visa_step_0');
        // });
        
//mange agent

       

        Route::get('apply/{type}',[VisaController::class,'index2']);

        Route::get('payments/{charges}',[PaymentController::class,'pay']);
        Route::get('done/{charges}',[PaymentController::class,'done']);

        
        Route::resources([
            'visas' => VisaController::class,
            'posts' => VisaController::class,
        ]);   
        Route::resources([
            'tickets' => TicketController::class,
            'posts' => TicketController::class,
        ]);
        //Contact Information 
            Route::get('/contactInformationIndex',[VisaController::class,'contactInformationIndex']);
            Route::post('/contactInformationStore',[VisaController::class,'contactInformationStore'])->name('contactInformationStore');

//Contact Information 
Route::get('/personalInformationIndex',[VisaController::class,'personalInformationIndex']);
Route::post('/personalInformationStore',[VisaController::class,'personalInformationStore'])->name('personalInformationStore');
    
Route::post('/storeupdate',[VisaController::class,'storeupdate'])->name('storeupdate');


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