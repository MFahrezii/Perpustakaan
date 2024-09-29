<?php

namespace App\Http\Controllers;

use App\Models\Siswa as ModelsSiswa;
use Illuminate\Http\Request;

class siswa extends Controller
{
    public function index()
    {
        $siswa = ModelsSiswa::all();
        return view('pages.DataMember', compact('siswa'));
    }

    public function tambah()
    {
        return view('pages.TambahSiswa');
    }

    public function create(Request $request)
    {
        

        $siswa = new ModelsSiswa();
        $siswa->create($request->all());
        return redirect('/DataMember');
    }

    public function edit($nis)
    {
        $siswa = ModelsSiswa::find($nis);
        return view('pages.EditSiswa', compact('siswa'));
    }

    public function update(Request $request, $nis)
    {   
        $siswa = ModelsSiswa::find($nis);
        $siswa->update($request->all());
        return redirect('/DataMember');
    }

    public function hapus($nis)
    {
        $siswa = ModelsSiswa::find($nis);
        $siswa->delete();
        return redirect('/DataMember');
    }
}
