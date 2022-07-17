<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Dosen extends Model
{
   public function allData()
   {
       return DB::table('tb_dosen')->get();
   }

   public function detailData($id_dosen)
   {
    return DB::table('tb_dosen')->where('id_dosen', $id_dosen)->first();
   }

   public function addData($data)
   {
    DB::table('tb_dosen')->insert($data);
   }

   public function editData($id_dosen, $data)
   {
    DB::table('tb_dosen')->where('id_dosen', $id_dosen)->update($data);
   }

   public function deleteData($id_dosen)
   {
    DB::table('tb_dosen')->where('id_dosen', $id_dosen)->delete();
   }

   public static function id_baru()
    {
    	$id_dosenmax = DB::table('tb_dosen')->max('id_dosen');
    	$addNol = '';
    	$id_dosenmax = str_replace("PEG", "", $id_dosenmax);
    	$id_dosenmax = (int) $id_dosenmax + 1;
        $incrementKode = $id_dosenmax;

    	if (strlen($id_dosenmax) == 1) {
    		$addNol = "000";
    	} elseif (strlen($id_dosenmax) == 2) {
    		$addNol = "00";
    	} elseif (strlen($id_dosenmax == 3)) {
    		$addNol = "0";
    	}

    	$id_dosenbaru = "PEG".$addNol.$incrementKode;
    	return $id_dosenbaru;
    }
}
