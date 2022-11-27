<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PengunjungController extends Controller
{
    public function simpanPengunjung(Request $request){
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

        return redirect('/')->with('status', 'Data Disimpan!');
    }
}
