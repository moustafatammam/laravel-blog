<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function showTable(){
        $allPosts = [
            ['id' => 1, 'title' => 'MVC Pattern', 'posted_by' => 'Moustafa', 'created_at' => '2020-04-03'],
            ['id' => 2, 'title' => 'Artisan Commands', 'posted_by' => 'Ahmed', 'created_at' => '2020-04-06'],
            ['id' => 3, 'title' => 'Schedule Jobs', 'posted_by' => 'Mohamed', 'created_at' => '2020-04-010']
        ];
        return view('table', ['posts' => $allPosts]);
    } 
}
