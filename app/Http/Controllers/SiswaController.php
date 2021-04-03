<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Detail;

class SiswaController extends Controller
{
     public function FormInputSiswa(){
        $tampil = Siswa::all();
        return view('siswa.tambah-siswa',compact('tampil'));
    }

    public function SimpanData(Request $request){
        $create = new Siswa();
        $create->nama = $request->input('nama');
        $create->alamat = $request->input('alamat');
        $create->jk = $request->input('jk');
        $create->save();
        
        return redirect('/');


    }

    public function FormDetail(){
        return view('siswa.tambah-detail');
    }

    public function SimpanDetail(Request $request,$id){
        $create= new Detail();
        $create->jurusan =$request->input('jurusan');
        $create->kelas =$request->input('kelas');
        $create->id_siswa = $id;
        $create->save();
        
        return redirect('/biodata');
    }

    public function Biodata(){
        $tampill = Siswa::join('details','siswas.id','=','details.id_siswa')->get();
        return view('siswa.biodata', compact('tampill'));
    }

}
