<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\ControllerRequesting;
use App\Http\Controllers\ControllerMails;

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

Route::get('/add_customer', function () {
    return view('add_customer');
});

//accueil
//Route::get('/', [ControllerMails::class, 'userconfirm']);

Route::get('/welcome', function(){
    return view('welcome');
});

    
//route pour les connexions des utilisateurs
//Route::get('/espace_client', [UserController::class, 'loginclient'])->name('connexion'); reactiver cette route aprs tous les test




/*Route::get('/login_client', function(){
	return view('login_client');
});*/

/*Route::get('/admin_login', function(){
    if( session()->has('pseudo'))
    {
        return view('admin/admin_dashboard');
    }
    else
    {
        return view('admin/admin_login');
    }
	
});*/

Route::get('/admin_dashboard', function(){
	if( session()->has('pseudo'))
	{
		return view('admin/admin_dashboard');
	}
    else
    {
        return redirect()->route('admin_connexion');
    }
	
});

//connexion des utilisateur
Route::get('/login_client', [UserController::class, 'loginclient'])->name('connexion');

Route::get('/admin_login', [UserController::class, 'loginadmin'])->name('admin_connexion');

Route::post('/admin_login', [UserController::class, 'adminLogin']);

Route::post('/login_client', [UserController::class, 'customerLogin']);


//Routes pour les formulaires d'ajout
Route::get('/add_customer', [UserController::class, 'addcustomer'])->name('inscription');

Route::get('/add_user', function(){
	return view('admin/add_user');
});

Route::get('/confirm/{id}/{token}', [UserController::class, 'confirm']);

Route::post('/add_customer', [UserController::class, 'createCustomer']);

Route::post('/add_user', [UserController::class, 'createCustomer']);



//les requetes des clients

Route::get('/espace_client', function(){
	if( session()->has('nom') AND session()->has('prenom'))
	{
		return view('customer/espace_client');
	}
    else
    {
        return redirect()->route('connexion');
    }
    
});

Route::get('/add_request', function(){
	return view('admin/add_request');
});

//ajout des requetses pr le client ou l'admin
Route::post('/add_user', [Usercontroller::class, 'createCustomer']);

Route::post('/add_request', [ControllerRequesting::class, 'createRequest']);

Route::post('/espace_client', [ControllerRequesting::class, 'addRequest']);

//Route::post('/admin_page',  [ControllerRequesting::class, 'createRequest']);

//mise a jour des requetes par l'admin ou le client
Route::get('/update_request', [ControllerRequesting::class, 'adminUpdateReqForm'])->name('upatereq');
Route::get('/edit_request', [ControllerRequesting::class, 'customerEditRequestForm'])->name('editreq');

Route::post('/update_request', [ControllerRequesting::class, 'updateRequest']);
Route::post('/edit_request', [ControllerRequesting::class, 'updateRequest']);

//suppression des requetses
Route::post('/admin_dashboard', [ControllerRequesting::class, 'deleteRequestings']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
