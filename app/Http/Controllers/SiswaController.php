<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index(Request $request){
        $data = Siswa::all();
        return view('data-siswa', compact('data'));
    }
    
    public function tambahsiswa(){
        return view('tambah-siswa');
    }

    public function insertsiswa(Request $request){
        $this->validate($request,[
            'nis' => 'required|min:7|max:200',
            'nama' => 'required',
        ]);
        Siswa::create($request->all());
        return redirect()->route('siswa')->with('success','Data berhasil Di Tambahkan');
    }

    public function showdata($nis){
        $data = siswa::find($nis);
        return view('edit-siswa', compact('data'));
    }

    public function updatesiswa(Request $request, $nis){
        $this->validate($request,[
            'nis' => 'required|min:7|max:200',
            'nama' => 'required',
        ]);
        $data = siswa::find($nis);
        $data->update($request->all());
        return redirect()->route('siswa')->with('success','Data berhasil Di Update');
    }

    public function deletesiswa($nis){
        $data = siswa::find($nis);
        $data->delete();
        return redirect()->route('siswa')->with('success','Data berhasil Di Hapus');
    }
}
