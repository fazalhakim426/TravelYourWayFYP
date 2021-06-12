<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\DropdownController;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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

Route::get('/generate-countries',[CountryController::class,'create']);
Route::get('/', function () {

       return view('welcome');
});


Route::get('/dashboard', function () {
    $visas=DB::table('visas')->where('user_id','=',Auth::user()->id)->get();

    return view('userdashboard.dashboard')->with('visas',$visas)->with('i',0);

})->middleware(['auth'])->middleware('verified')->middleware('address')->middleware('membership')->name('dashboard');



Route::get(
    'dependent-dropdown',
     [DropdownController::class, 'index']
    );
Route::post(
    'api/fetch-states',
     [DropdownController::class, 'fetchState']
    );
Route::post(
    'api/fetch-cities',
     [DropdownController::class, 'fetchCity']
    );


require __DIR__.'/customerweb.php';
require __DIR__.'/agentweb.php';
require __DIR__.'/supreagentweb.php';

require __DIR__.'/auth.php';
require __DIR__.'/adminweb.php';