<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function save(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nik' => 'required',
            'nip' => 'required',
            'unit_kerja' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'nama_pasangan' => 'required',
            'is_pasangan_bekerja' => 'required',
        ]);
        $xx = DB::table('users')->insert($validate);
        return redirect()->route('daftar.index')->with('save', 'materi berhasil di upload');
    }
}
