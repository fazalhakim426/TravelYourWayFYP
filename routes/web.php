<?php

use App\Models\Agent as ModelsAgent;
use Illuminate\Support\Facades\Route;
use App\Models\Visa;
use App\Models\User;
use App\Models\Agent;

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
    // dd(Agent::get());

//niaz khan new commit
//     $posts = User::withCount('visa')->get();
   

//     $visa = Visa::with(['payment','super_agent', 'review'])->get();
//     dd($visa[0]->visa_super_agent);
// foreach ($posts as $post) {
//     echo $post->name;
//     echo $post->visa_count;
// } 
//  $ts = User::withCount('ticket')->get();
// echo 'tickets';
// foreach ($ts as $post) {
//     echo $post->name;
//     echo $post->ticket_count;
// }
       return view('welcome');
});


Route::get('/dashboard', function () {
    $visas=DB::table('visas')->where('user_id','=',Auth::user()->id)->get();

    return view('userdashboard.dashboard')->with('visas',$visas)->with('i',0);

})->middleware(['auth'])->middleware('verified')->middleware('address')->middleware('membership')->name('dashboard');




require __DIR__.'/customerweb.php';
require __DIR__.'/agentweb.php';
require __DIR__.'/supreagentweb.php';

require __DIR__.'/auth.php';
require __DIR__.'/adminweb.php';