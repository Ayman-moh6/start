<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstCon extends Controller
{
    public function __construct(){
        $this->middleware(middleware: 'auth');
    }
    public function show(){
    return 'ayman';
    }
}
