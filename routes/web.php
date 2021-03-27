<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
       return view('welcome');
});


Route::get('/dashboard', function () {
    
    $email=Auth::user()->email;
    if($email=="hakimfazal426@gmail.com"||$email=="niazm1225@gmail.com")
    {
        
        $visas=DB::table('visas')->get();
        
        return view('admindashboard.dashboard')->with('visas',$visas)->with('i',1);

    }
    else
     {
        $visas=DB::table('visas')->where('user_id','=',Auth::user()->id)->get();
        
        return view('userdashboard.dashboard')->with('visas',$visas)->with('i',0);;

     }

   })->middleware(['auth'])->middleware('verified')->middleware('address')->name('dashboard');

require __DIR__.'/userweb.php';
require __DIR__.'/auth.php';
require __DIR__.'/adminweb.php';