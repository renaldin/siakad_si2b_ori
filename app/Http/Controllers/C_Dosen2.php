<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Dosen2;

class C_Dosen2 extends Controller
{
    public function __construct()
    {
        $this->M_Dosen2 = new M_Dosen2();
    }

    public function index(){
        $data = ['dosen' => $this->M_Dosen2->allData()
        ];
        return view('v_dosen2',$data);
    }
}
