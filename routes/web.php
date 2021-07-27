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


//--------------------------Money Exchange Officer-------------------------

Route::get('/login/meo', "LoginMeoController@index");
Route::post('/login/meo', "LoginMeoController@verify");
Route::get('/login/registration', "loginController@signUP")->name("registration.register");
Route::post('/login/registration', "registrationcontroller@registration");
Route::get('/logout/meo', "LogoutController@logout");


// Route::group(['middleware'=>['sessionMeo']],function()
// {

Route::group(['middleware'=>['meo']],function()
{
    Route::get('/homeMeo', "HomeMeoController@index");
    
    Route::get('/dashbord/profile', "userController@profile")->name("user.profile");
    Route::get('/dashbord/editProfile', "userController@editProfile")->name("user.edit_profile");
    Route::get('/profile/editProfile', "userController@editProfile")->name("user.edit__profile");
    Route::get('/dashbord/changePassword', "userController@changePassword")->name("user.changePassword");
    
    //Request
    Route::get('/requestView', "reqController@index");
    Route::get('/addRequest', "reqController@show");
    Route::post('/addRequest', "reqController@insert");

    Route::get('/editRequest', "reqController@editview");
    Route::get('/editRequest/{id}', "reqController@edit");
    Route::post('/editRequest/{id}', "reqController@update");


    Route::get('/viewRequest', "reqController@detailsView");
    Route::get('/detailsRequest/{id}', "reqController@details");


    Route::get('/deleteRequest', "reqController@deleteview");
    Route::get('/deleteRequest/{id}', "reqController@delete");
    Route::post('/deleteRequest/{id}', "reqController@destroy");

   

    Route::get('/viewClient', "clientControl@view");
    

    Route::get('/request/moneyExchange', "ExchangeController@view");


    //client_search

    Route::get('/client_search', 'ClientSearch@index');
    Route::get('/live_search/action', 'ClientSearch@action')->name('client_search.action');

//pdf

Route::get('/client_pdf', 'ClientPDFController@index');

Route::get('/client_pdf/pdf', 'ClientPDFController@pdf');


//currency Convert

Route::get('/currencyConvert', 'currencyController@index');
Route::post('/currencyConvert', 'currencyController@convert');


//Contact Manager with JSON


Route::get('/contact/store', 'ContactController@index');
Route::post('/contact/store', 'ContactController@store');



//transactions


Route::get('/transaction_pdf', 'TransactionPDFController@index');

Route::get('/transaction_pdf/pdf', 'TransactionPDFController@pdf');



// Review Problem

    Route::get('/reviewView', "reviewController@index");
    Route::get('/addReview', "reviewController@show");
    Route::post('/addReview', "reviewController@insert");

    Route::get('/editReview', "reviewController@editview");
    Route::get('/editReview/{id}', "reviewController@edit");
    Route::post('/editReview/{id}', "reviewController@update");

    
    Route::get('/deleteReview', "reviewController@deleteview");
    Route::get('/deleteReview/{id}', "reviewController@delete");
    Route::post('/deleteReview/{id}', "reviewController@destroy");


//offer

Route::get('/offerView', "OfferController@index");

Route::get('/rates', "rateController@index");

//

Route::get('/contact/store', 'ContactController1@index');
Route::post('/contact/store', 'ContactController1@store');


});




// });


