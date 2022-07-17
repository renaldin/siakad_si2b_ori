<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Dosen;
use PDF; //library pdf

class C_Dosen extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->M_Dosen = new M_Dosen();
    }

    public function index()
    {

        $data = [
            'dosen' => $this->M_Dosen->allData()
        ];
        return view('v_dosen', $data);
    }

    public function detail($id_dosen)
    {
        if (!$this->M_Dosen->detailData($id_dosen)) {
            abort(404);
        }
        $data = [
            'dosen' => $this->M_Dosen->detailData($id_dosen)
        ];
        return view('v_detaildosen', $data);
    }

    public function add()
    {
        $id_baru = ['id_baru' => $this->M_Dosen->id_baru()];
        //$id_baru2 = implode(" ",$id_baru);
        //echo $id_baru2;
        return view('v_adddosen', $id_baru);
    }

    public function insert()
    {
        Request()->validate([
            'nip' => 'required|unique:tb_dosen,nip|min:17|max:18',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'foto_dosen' => 'required|mimes:jpg,jpeg,png,bmp|max:1024',
        ], [ //ini adalah konversi keterangan validasi form NIP dalam bahasa indonesia
            'nip.required' => 'NIP wajib di isi !',
            'nip.unique' => 'NIP ini sudah terdaftar di database !',
            'nip.min' => 'NIP minimal 17 karakter',
            'nip.max' => 'NIP maksimal 18 karakter',
            'nama_dosen.required' => 'Nama Dosen wajib di isi !',
            'mata_kuliah.required' => 'Nama Mata Kuliah wajib di isi !',
            'foto_dosen.required' => 'Foto Dosen wajib di isi !',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_dosen;
        $fileName = Request()->nip . '.' . $file->extension();
        $file->move(public_path('foto_dosen'), $fileName);

        $data = [
            'id_dosen' => Request()->id_dosen,
            'nip' => Request()->nip,
            'nama_dosen' => Request()->nama_dosen,
            'mata_kuliah' => Request()->mata_kuliah,
            'foto_dosen' => $fileName,
        ];
        $this->M_Dosen->addData($data);
        return redirect()->route('dosen')->with('pesan', 'Data berhasil ditambahkan !');
    }


    public function edit($id_dosen)
    {
        if (!$this->M_Dosen->detailData($id_dosen)) {
            abort(404);
        }

        $data = [
            'dosen' => $this->M_Dosen->detailData($id_dosen)
        ];
        return view('v_editdosen', $data);
    }

    public function update($id_dosen)
    {
        Request()->validate([
            'nip' => 'required|min:17|max:18',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'foto_dosen' => '|mimes:jpg,jpeg,png,bmp|max:1024',
        ], [ //ini adalah konversi keterangan validasi form NIP dalam bahasa indonesia
            'nip.required' => 'NIP wajib di isi !',
            'nip.min' => 'NIP minimal 17 karakter',
            'nip.max' => 'NIP maksimal 18 karakter',
            'nama_dosen.required' => 'Nama Dosen wajib di isi !',
            'mata_kuliah.required' => 'Nama Mata Kuliah wajib di isi !',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_dosen <> "") {
            //jika ganti gambar/foto
            $file = Request()->foto_dosen;
            $fileName = Request()->nip . '.' . $file->extension();
            $file->move(public_path('foto_dosen'), $fileName);

            $data = [
                'nip' => Request()->nip,
                'nama_dosen' => Request()->nama_dosen,
                'mata_kuliah' => Request()->mata_kuliah,
                'foto_dosen' => $fileName,
            ];
            $this->M_Dosen->editData($id_dosen, $data);
        } else {
            //jika tidak ganti gambar/foto
            $data = [
                'nip' => Request()->nip,
                'nama_dosen' => Request()->nama_dosen,
                'mata_kuliah' => Request()->mata_kuliah,
            ];
            $this->M_Dosen->editData($id_dosen, $data);
        }

        return redirect()->route('dosen')->with('pesan', 'Data berhasil diupdate !');
    }

    public function delete($id_dosen)
    {
        //hapus atau delete foto
        $dosen = $this->M_Dosen->detailData($id_dosen);
        if ($dosen->foto_dosen <> "") {
            unlink(public_path('foto_dosen') . '/' . $dosen->foto_dosen);
        }
        $this->M_Dosen->deleteData($id_dosen);
        return redirect()->route('dosen')->with('pesan', 'Data berhasil dihapus !');
    }

    public function print()
    {
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('v_print', [
            'data' => 'Laporan Data Dosen ' . date('d F Y'),
            'dosen' => $this->M_Dosen->allData()
        ])->setPaper('a4', 'landscape');
        //mendownload laporan.pdf
        return $data->download('laporan.pdf');
    }
}
