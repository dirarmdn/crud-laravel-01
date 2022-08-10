<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $data = Pegawai::all();
        return view('data-pegawai', compact('data'));
    }
    
    public function tambahpegawai(){
        return view('tambah-pegawai');
    }

    public function insertpegawai(Request $request){
        $this->validate($request,[
            'nip' => 'required|min:7|max:200',
            'nama' => 'required',
        ]);
        Pegawai::create($request->all());
        return redirect()->route('pegawai')->with('success','Data berhasil Di Update');
    }

    public function tampilkandata($nip){
        $data = pegawai::find($nip);
        return view('edit-pegawai', compact('data'));
    }

    public function updatedata(Request $request, $replid){
                $this->validate($request,[
            'nip' => 'required|min:7|max:200',
            'nama' => 'required',
        ]);
        $data = pegawai::find($replid);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success','Data berhasil Di Update');
    }

    public function deletedata($replid){
        $data = pegawai::find($replid);
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data berhasil Di Hapus');
    }
}
