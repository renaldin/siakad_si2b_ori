<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Register extends Controller
{
    public function index(){
        return view('v_register');
    }
}
