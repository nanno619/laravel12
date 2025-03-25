<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // return 'Hello dari controller';
        return view('blog', ['data' => 'whatever']);
    }
}
