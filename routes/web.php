<?php

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

// COMMENTING OUT BASE CODE DO NOT DELETE YET
// COMMENTING OUT BASE CODE DO NOT DELETE YET

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// COMMENTING OUT BASE CODE DO NOT DELETE YET
// COMMENTING OUT BASE CODE DO NOT DELETE YET



// OLD CODE STARTS
// OLD CODE STARTS

Route::get('/', function () {
 return redirect('/admin');
});


Auth::routes();

// // Business Registration (Business/index.blade.php)  
// Route::get('/business', 'BusinessController@index');
// Route::post('/business', 'BusinessController@store');
// //

// // User Registration (UserRegistration/index.blade.php)
// //Route::get('/userregistration', 'UserRegistrationController@index');
// //Route::post('/userregistration', 'UserRegistrationController@store');

// Route::resource('employees','EmployeeController');
// //


// Route::get('/payment', 'PaymentController@index');
// Route::get('/paymentselection', 'PaymentSelectionController@index');
// Route::get('/home', 'HomeController@index')->name('home');

// // Users Allowed
// Route::post('/paymentselection', 'PaymentSelectionController@p1');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
   
});

// OLD CODE ENDS
// OLD CODE ENDS (Includes the line below this)
?>
