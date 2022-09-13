<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourrierController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SousdirectionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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


Route::middleware(['auth'])->group(function () {

    Route::middleware(['blocked'])->group(function(){

        Route::get('/compte/admin',[AdminController::class,'index'])->name('admin.dashboard.home');
     
        Route::get('/compte/admin/sd',[SousdirectionController::class,'index'])->name('sd.list');
        Route::post('/compte/admin/sd/register',[SousdirectionController::class,'store'])->name('sd.register');
        Route::post('/compte/admin/sd/update',[SousdirectionController::class,'update'])->name('sd.update');
        Route::get('/compte/admin/sd/delete/{id}',[SousdirectionController::class,'destroy'])->name('sd.delete');
    
    
    
        Route::get('/compte/admin/sv',[ServiceController::class,'index'])->name('sv.list');
        Route::post('/compte/admin/sv/register',[ServiceController::class,'store'])->name('sv.register');
        Route::post('/compte/admin/sv/update',[ServiceController::class,'update'])->name('sv.update');
        Route::get('/compte/admin/sv/delete/{id}',[ServiceController::class,'destroy'])->name('sv.delete');
    
    });
   
    Route::get('/compte/agent',[UserController::class,'index'])->name('agent.dashboard.home');   
    Route::get('/compte/admin/ag/list',[UserController::class,'list'])->name('ag.list');
    Route::get('/compte/admin/ag/detail/{id}',[UserController::class,'detail'])->name('ag.detail');
    Route::get('/compte/admin/ag/edit/{id}',[UserController::class,'edit'])->name('ag.edit');

    Route::get('/compte/admin/ag/courrier/',[CourrierController::class,'registre'])->name('courrier.registre');
    Route::get('/compte/admin/ag/courrier/create',[CourrierController::class,'create'])->name('courrier.create');
   
    Route::post('/compte/admin/ag/courrier/store',[CourrierController::class,'store'])->name('courrier.store');

    Route::get('/compte/admin/ag/courrier/registre/enregister',[CourrierController::class,'registre_courrier_enregister'])->name('courrier.registre_enregistrer');
    Route::get('/compte/admin/ag/courrier/registre/enregister/liste',[CourrierController::class,'registre_courrier_enregister_liste'])->name('courrier.registre_enregistrer_liste');
    Route::get('/compte/courrier/detail/{id}',[CourrierController::class,'detail'])->name('courrier.detail');
});


/*
Route::get('/sendmail',function(){
    event(new \App\Events\SendMailsEvent());
    return null;
});
*/
Route::get('/ws',function(){
    return view('app');
});

Route::get('/wi',function(){
    return view('inpute');
});


Route::post('/chat-message',function(\Illuminate\Http\Request $request){
    event(new \App\Events\SendMailsEvent($request->message));
    return null;
});


Route::post('/inpute',function(\Illuminate\Http\Request $request){
    event(new \App\Events\SendMailsEvent($request->message));
    return null;
});


