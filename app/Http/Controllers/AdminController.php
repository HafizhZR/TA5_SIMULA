<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index (){
        $data = User::all();

        return view('pengunjung', compact('data'));
    }

    public function formTambah (){
        $data = User::all();

        return view('formTambah');
    }

    public function simpanData (Request $request){
        $nama = $request-> nama;
        $telepon = $request-> telepon;
        $email = $request-> email;
        $alamat = $request-> alamat;

        $data = new User();
        $data->name = $nama;
        $data->tlp = $telepon;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->password = Hash::make('rahasia');
        $data->save();

        return redirect('pengunjung')->with('status', 'Data Disimpan!');
    }

    public function hapusPengunjung (Request $request){
        $id = $request->id;
        $data = User::find($id);
        $data->delete();
        return redirect('pengunjung')->with('status', 'Data Dihapus');
    }

    public function editPengunjung($id){
        $data = User::find($id);

        return view('formEdit',compact('data'));
    }

    public function updatePengunjung (Request $request){
        $id = $request-> id;
        $nama = $request-> nama;
        $telepon = $request-> telepon;
        $email = $request-> email;
        $alamat = $request-> alamat;

        $data = User::find($id);
        $data->name = $nama;
        $data->tlp = $telepon;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->update();

        return redirect('pengunjung')->with('status', 'Data Diupdate!');
    }
}
