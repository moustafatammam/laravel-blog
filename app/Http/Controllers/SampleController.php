<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function helloAction(){
        return view('hello', ['firstName' => 'Moustafa', 'lastName' => 'Tammam', 'age' => '29', 'books' => ['FirstBook', 'SecondBook', 'ThirdBook']]);

    }
}
