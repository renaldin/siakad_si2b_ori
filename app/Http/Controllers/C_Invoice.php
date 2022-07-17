<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Invoice extends Controller
{
    public function index(){
        return view('v_invoice');
    }

    public function print(){
        return view('v_invoiceprint');
    }

}
