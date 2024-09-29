<?php

namespace App\Http\Controllers;

use App\Models\Buku as ModelsBuku;
use Illuminate\Http\Request;

class buku extends Controller
{
    public function index()
    {
        $bukus = ModelsBuku::all();
        return view('pages.DataBuku', compact('bukus'));
    } 

    public function tambah()
    {
        return view('pages.TambahBuku');
    }

    public function create(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'sinopsis' => 'required',
            'penulis' => 'required',
        ], [
            'kode_buku.required' => 'Kode buku harus diisi',
            'judul.required' => 'Judul buku harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'tahun_terbit.required' => 'Tahun terbit harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berupa gambar dengan format jpeg, png, jpg, atau gif',
            'foto.max' => 'Foto harus berukuran maksimal 10MB',
            'sinopsis.required' => 'Sipnosis harus diisi',
            'penulis.required' => 'Penulis harus diisi',
        ]);

        $buku = new ModelsBuku();
        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->sinopsis = $request->sinopsis;
        $buku->penulis = $request->penulis;
        $buku->kategori = $request->kategori;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $buku->foto = $imageName;
        }

        $buku->save();
        return redirect('/DataBuku');
    }

    public function edit($kode_buku)
    {
        $buku = ModelsBuku::find($kode_buku);
        return view('pages.EditBuku', compact('buku'));
    }

    public function update(Request $request, $kode_buku)
    {
        $buku = ModelsBuku::find($kode_buku);

        $validatedData = $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'sinopsis' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
        ], [
            'kode_buku.required' => 'Kode buku harus diisi',
            'judul.required' => 'Judul buku harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'tahun_terbit.required' => 'Tahun terbit harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berupa gambar dengan format jpeg, png, jpg, atau gif',
            'foto.max' => 'Foto harus berukuran maksimal 10MB',
            'sinopsis.required' => 'Sipnosis harus diisi',
            'penulis.required' => 'Penulis harus diisi',
            'kategori.required' => 'katgori harus diisi',
        ]);

        $buku->update([
            'kode_buku' => $validatedData['kode_buku'],
            'judul' => $validatedData['judul'],
            'penerbit' => $validatedData['penerbit'],
            'tahun_terbit' => $validatedData['tahun_terbit'],
            'sinopsis' => $validatedData['sinopsis'],
            'penulis' => $validatedData['penulis'],
            'kategori' => $validatedData['kategori'],
        ]);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $buku->update(['foto' => $imageName]);
        }


        return redirect('/DataBuku');
    }

    public function hapus($kode_buku)
    {
        $buku = new ModelsBuku();
        $buku->find($kode_buku)->Delete();
        return redirect('/DataBuku');
    }
}
