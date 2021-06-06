<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SuperAgent\TicketRequestController;
use App\Http\Controllers\SuperAgent\ManageAgentController;
use App\Http\Controllers\SuperAgentController;
use Illuminate\Support\Facades\DB;

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
           
                
 });


    
   
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