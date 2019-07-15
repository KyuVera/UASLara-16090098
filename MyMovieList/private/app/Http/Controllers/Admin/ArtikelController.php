<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TblArtikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = TblArtikel::orderBy('created_at', 'desc')->paginate(10);
        return view('Admin.pecahan.artikel.article', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pecahan.artikel.tambahartikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->judul == null) {
            return redirect()->route('ArtikelList.create')->with('error', 'Judul tidak boleh kosong');
        }else if($request->isi == null) {
            return redirect()->route('ArtikelList.create')->with('error', 'Isi tidak boleh kosong');
        }

        $this->validate($request, [
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000'
            ]);

        $imageName = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/gambar', $imageName);


        TblArtikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $imageName
            
        ]);
        return redirect ()->route('ArtikelList.index')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = TblArtikel::find($id);
        return view ('Admin.pecahan.artikel.editartikel', compact('artikel'))->with('artikel', $artikel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = TblArtikel::find($id);
         if($request->judul == null) {
            return redirect()->route('ArtikelList.create')->with('error', 'Jadwal tidak boleh kosong');
        }else if($request->isi == null) {
            return redirect()->route('ArtikelList.create')->with('error', 'Isi tidak boleh kosong');
        }

        if($request->file('gambar') == "") {
                $movie->gambar = $movie->gambar;
            } else {
                unlink('private/storage/app/public/gambar/' .$artikel->gambar);
                $this->validate($request, [
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
                $imageName = $request->gambar->getClientOriginalName();
                $request->gambar->storeAs('public/gambar', $imageName);
            }

            $artikel->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $imageName
        ]);
        return redirect ()->route('ArtikelList.index')->with('info', 'Data Berhasil Diubah'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = TblArtikel::find($id);
        $gambar = $artikel->gambar;
        unlink('private/storage/app/public/gambar/'. $artikel->gambar);
        $artikel->delete();
        return redirect('ArtikelList')->with('error','data berhasil dihapus');
    }
}
