<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Dosen2 extends Model
{
   public function allData()
   {
       return [
       [
            'nip' => '19909028453573',
            'nama_dosen' => 'Alexander',
            'matkul' => 'Pemrograman Web'
       ],
       [
            'nip' => '19979028453574',
            'nama_dosen' => 'Michele',
            'matkul' => 'Matematika Diskrit'
        ],
        [
            'nip' => '19919423255234',
            'nama_dosen' => 'Christopher',
            'matkul' => 'Pemrograman Berorientasi Objek'
        ]
    ];
   }
}
