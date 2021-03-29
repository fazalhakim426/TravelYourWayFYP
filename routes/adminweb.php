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
use Illuminate\Http\Request;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\AdminGeneralController;
Route::middleware(['auth'])->group(function () {
    Route::middleware(['verified'])->group(function () {
        Route::middleware(['admin'])->group(function () {

Route::get('admindashboard',[AdminGeneralController::class,'index']);
    
        Route::post('applycharges',[PaymentController::class,'applycharges'])->name('applycharges');

        Route::delete('adminvisadestroy',[AdminGeneralController::class,'destroy'])->name('adminvisadestroy');
        
        Route::get('adminvisacancel',[AdminGeneralController::class,'cancel']);
        Route::get('adminvisarevoke',[AdminGeneralController::class,'revoke']);
        Route::get('adminvisaedit0',[AdminGeneralController::class,'edit0']);
        Route::get('adminvisaedit1',[AdminGeneralController::class,'edit1']);
        Route::get('adminvisaedit2',[AdminGeneralController::class,'edit2']);
        Route::get('adminvisaedit3',[AdminGeneralController::class,'edit3']);
        Route::get('adminvisaedit4',[AdminGeneralController::class,'edit4']);
        Route::get('adminvisaedit5',[AdminGeneralController::class,'edit5']);
        // admin visa updation 
Route::post('/adminvisaupdate',[AdminGeneralController::class,'update'])->name('adminvisaupdate');
Route::post('/adminvisaupdate1',[AdminGeneralController::class,'update1'])->name('adminvisaupdate1');
Route::post('/adminvisaupdate2',[AdminGeneralController::class,'update2'])->name('adminvisaupdate2');
Route::post('/adminvisaupdate3',[AdminGeneralController::class,'update3'])->name('adminvisaupdate3');
Route::post('/adminvisaupdate4',[AdminGeneralController::class,'update4'])->name('adminvisaupdate4');
Route::post('/adminvisaupdate5',[AdminGeneralController::class,'update5'])->name('adminvisaupdate5');

      
Route::resources([
    'countries' => CountryController::class,
    'posts' => CountryController::class,
]);  
//hotel    
Route::resources([
    'hotels' => HotelController::class,
    'posts' => HotelController::class,
]);
Route::get('hoteledit',[HotelController::class,'destroy']);
        // Route::get('countryedit',[CountryController::class,'edit'])

        Route::get('/managehajj',function(){
        return view('admindashboard.management.hajj');
         })->middleware('admin'); 

   

    Route::get('/managevisas',function(){      
        return view('admindashboard.management.visas');
    }); 

    Route::get('/manageummrah',function(){      
        return view('admindashboard.management.ummrah');
    });
Route::get('manage/{type}',[AdminGeneralController::class,'manage']);
   
    // Route::get('/manageticket',function(){      
    //     return view('admindashboard.management.ticket');
    // }); 



    // Route::get('/immigrationvisa2',function(){
    //     return view('userdashboard.apply.immigration_visa_step_2');
    // });

    // Route::get('/immigrationvisa3',function(){
    //     return view('userdashboard.apply.immigration_visa_step_3');
    // });
    // Route::get('/immigrationvisa4',function(){
    //     return view('userdashboard.apply.immigration_visa_step_4');
    // });
    // Route::get('/immigrationvisa0',function(){
    //     return view('userdashboard.apply.immigration_visa_step_0');
    // });
    // Route::get('/immigrationvisa5',function(){
    //     return view('userdashboard.apply.immigration_visa_step_5');
    // });

});
});
});