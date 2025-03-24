<?php

use Illuminate\Support\Facades\Route;

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

/**
 * View Route
 *
 * -Route::view()
 * -Return a view
 * -1st arg = URI
 * -2nd arg = view name
 * -3rd arg = data array
 */

Route::get('/blog', function (){
    $profile = "aku programmer noob";
    return view('blog', ["data" => $profile]);
});

// Route::view('/blog', 'blog', ["data" => "saya programmer pemula"]);



