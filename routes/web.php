<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/**
 * Route Method
 *
 * 1) GET
 * -This is used to retrieve data from the server
 * -We use this to display data
 *
 * 2) POST
 * -Is used to send data to the server for creating resources or submitting forms
 *
 * 3) PUT
 * -Is used to update an existing resource
 *
 * 4) DELETE
 * -Is used to delete resource
 *
 * 5) PATCH
 * -Is used to update the user resource partially
 *
 * 6) OPTIONS
 * -Is used to retrieve information about the communication options available for specific resource, often used in API requests
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function (){
    return 'Hello World';
});

// Route::get('/blog', function (){
//     // Ambil data dari database
//     $profile = "aku programmer noob";
//     return view('blog', ["data" => $profile]);
// })->name('blog'); // named route

/**
 * View Route
 *
 * -Route::view()
 * -Return a view
 * -1st arg = URI
 * -2nd arg = view name
 * -3rd arg = data array
 * -tak boleh amik data dynamic
 */

// Route::view('/blog', 'blog', ["data" => "saya programmer pemula"]);

/**
 * Route Parameter
 *
 *
 */

Route::get('/blog/{id}', function (Request $request, $id){

    return redirect()->route('blog'); // redirect using named route
    // return 'ini adalah blog ' . $request->id;
});

/**
 * Route Controller
 *
 *
 */

Route::get('/blog', [BlogController::class, 'index']);


