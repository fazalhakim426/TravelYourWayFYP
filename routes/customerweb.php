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

        Route::get('/customerdashboard', function () {
    

            $visas=DB::table('visas')->where('user_id','=',Auth::user()->id)->get();
            
            return view('userdashboard.dashboard')->with('visas',$visas)->with('i',0);;
        
        })->middleware('address')->middleware('membership')->name('dashboard');
        
        

        

        Route::middleware(['customer'])->group(function(){

    
        
        // Route::get('/immigrationvisa0',function(){
        //     return view('userdashboard.immigration_apply.immigration_visa_step_0');
        // });
        
//mange agent

        Route::resources([
            'visas' => VisaController::class,
            'posts' => VisaController::class,
        ]);

        Route::get('apply/{type}',[VisaController::class,'index2']);

        Route::get('payments/{charges}',[PaymentController::class,'pay']);
        Route::get('done/{charges}',[PaymentController::class,'done']);

//step 0
    Route::get('/visas1',[VisaController::class,'create1']);

Route::post('/storeupdate',[VisaController::class,'storeupdate'])->name('storeupdate');

//step 1
Route::post('/store1',[VisaController::class,'store1'])->name('store1');
Route::get('/create1',[VisaController::class,'create1']);
//step 2
Route::post('/store2',[VisaController::class,'store2'])->name('store2');
Route::get('/create2',[VisaController::class,'create2']);

//step 3
Route::post('/store3',[VisaController::class,'store3'])->name('store3');
Route::get('/create3',[VisaController::class,'create3']);

//step 4
Route::post('/store4',[VisaController::class,'store4'])->name('store4');
Route::get('/create4',[VisaController::class,'create4']);


//step 3
Route::post('/store5',[VisaController::class,'store5'])->name('store5');
Route::get('/create5',[VisaController::class,'create5']);

Route::get('/edit0',[VisaController::class,'edit0']);
Route::post('/update',[VisaController::class,'update'])->name('update');

Route::get('/edit1',[VisaController::class,'edit1']);
Route::post('/update1',[VisaController::class,'update1'])->name('update1');

Route::get('/edit2',[VisaController::class,'edit2']);
Route::post('/update2',[VisaController::class,'update2'])->name('update2');

Route::get('/edit3',[VisaController::class,'edit3']);
Route::post('/update3',[VisaController::class,'update3'])->name('update3');

Route::get('/edit4',[VisaController::class,'edit4']);
Route::post('/update4',[VisaController::class,'update4'])->name('update4');

Route::get('/edit5',[VisaController::class,'edit5']);
Route::post('/update5',[VisaController::class,'update5'])->name('update5');


    Route::get('/visas2',function(){
        return view('userdashboard.immigration_apply.immigration_visa_step_2');
    });
    Route::get('/visas3',function(){
        return view('userdashboard.immigration_apply.immigration_visa_step_3');
    });
    Route::get('/visas4',function(){
        return view('userdashboard.immigration_apply.immigration_visa_step_4');
    });
 
    Route::get('/visas5',function(){
        return view('userdashboard.immigration_apply.immigration_visa_step_5');
    });

});
});
});