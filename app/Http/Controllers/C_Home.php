<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function index(){
        return view('v_home');
    }

    public function about()
    {
        $data = ['nama_pt' => 'Politeknik Negeri Subang',
                'alamat' => 'Jln Brigjen Katamso Dangdeur Kec Subang Kab Subang'
    ];
        return view('v_about',$data);
    }

    public function about2($id)
    {
        return 'ini halaman about dengan id : '.$id;
    }
}
