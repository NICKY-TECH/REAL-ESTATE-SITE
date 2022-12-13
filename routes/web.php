<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

use App\Models\Agent;
use App\Http\Controllers\AdminBuildingController;
use App\Http\Controllers\AdminAgentController;
use App\Http\Controllers\PropertyController;
use App\Models\Buildings;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;

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
    $agents=Agent::paginate(3);
    $buildings=Buildings::latest()->paginate(3);
    return view('welcome',['agents'=>$agents,'buildings'=>$buildings]);
});

// Route::middleware(['auth','isAdmin'])->group(function(){
    
// });

Route::resource('admin/agents/details',AdminAgentController::class);
Route::resource('admin/buildings/info',AdminBuildingController::class);
Route::resource('/account',AccountController::class);



// Route::resource('/property-grid',PropertyController::class);

Route::post('/property/display',[AdminBuildingController::class,'display'])->name('building-grid.display');

Route::get('/agents',[AdminAgentController::class,'display'])->name('agents.display');

Route::get('/property/list',[AdminBuildingController::class,'list'])->name('building-grid.list');

// Route::get('/agent-single.html',function(){
//     return view('agent-single');
// });
// Route::get('/agents-grid.html',function(){
//     $agents=Agent::all();
//  return view ('agents-grid',['agents'=>$agents]);
// });

Route::get('/about',function(){
    return view('about');
});

// // Route::get('/property-single.html',function(){
// //     return view ('property-single');
// // });



// Route::post('/property-grid/display',[PropertyController::class,'display'])->name('property-grid.display');

// Route::resource('/property-grid',PropertyController::class);



//     Route::resource('admin/agents/details',[AdminAgentController::class]);
//     // Route::post('/property-grid/display',[PropertyController::class,'display'])->name('property-grid.display');
// });

Route::get('/notification',[AccountController::class,'notification']);

Route::get('/userdashboard',[AccountController::class,'userDashboard']);

Route::get('/userdashboard/home',[AccountController::class,'userHOMEScreen'])->name('userdashboard.home');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
