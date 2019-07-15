<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class MovieLsitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::orderBy('created_at', 'desc')->paginate(10);
        return view ('Admin.pecahan.Movie.movielist', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Admin.pecahan.Movie.tambahmovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->movie == null) {
            return redirect()->route('MovieList.create')->with('error', 'Judul Movie tidak boleh kosong');
        }else if($request->sinopsis == null) {
            return redirect()->route('MovieList.create')->with('error', 'Sinopsis tidak boleh kosong');
        }else if($request->genre == null) {
            return redirect()->route('MovieList.create')->with('error', 'Genre tidak boleh kosong');
        }else if($request->tanggal_rilis == null) {
            return redirect()->route('MovieList.create')->with('error', 'Tanggal Rilis tidak boleh kosong');
        }else if($request->rating_usia == null) {
            return redirect()->route('MovieList.create')->with('error', 'Rating Usia tidak boleh kosong');
        }

        $this->validate($request, [
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000'
            ]);

        $imageName = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/gambar', $imageName);


        Movie::create([
            'movie' => $request->movie,
            'sinopsis' => $request->sinopsis,
            'genre' => $request->genre,
            'tanggal_rilis' => $request->tanggal_rilis,
            'rating_usia' => $request->rating_usia,
            'gambar' => $imageName
            
        ]);
        return redirect ()->route('MovieList.index')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view ('Admin.pecahan.Movie.editmovie', compact('movie'))->with('movie', $movie);
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
        $movie = Movie::find($id);
        if($request->movie == null) {
            return redirect()->route('MovieList.create')->with('error', 'Judul Movie tidak boleh kosong');
        }else if($request->sinopsis == null) {
            return redirect()->route('MovieList.create')->with('error', 'Sinopsis tidak boleh kosong');
        }else if($request->genre == null) {
            return redirect()->route('MovieList.create')->with('error', 'Genre tidak boleh kosong');
        }else if($request->tanggal_rilis == null) {
            return redirect()->route('MovieList.create')->with('error', 'Tanggal Rilis tidak boleh kosong');
        }else if($request->rating_usia == null) {
            return redirect()->route('MovieList.create')->with('error', 'Rating Usia tidak boleh kosong');
        }
        if($request->file('gambar') == "") {
                $movie->gambar = $movie->gambar;
            } else {
                unlink('private/storage/app/public/gambar/' .$movie->gambar);
                $this->validate($request, [
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
                $imageName = $request->gambar->getClientOriginalName();
                $request->gambar->storeAs('public/gambar', $imageName);
            }            


        $movie->update([
            'movie' => $request->movie,
            'sinopsis' => $request->sinopsis,
            'genre' => $request->genre,
            'tanggal_rilis' => $request->tanggal_rilis,
            'rating_usia' => $request->rating_usia,
            'gambar' => $imageName
        ]);
        return redirect ()->route('MovieList.index')->with('info', 'Data Berhasil Diubah');    
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $gambar = $movie->gambar;
        unlink('private/storage/app/public/gambar/'. $movie->gambar);
        $movie->delete();
        return redirect('MovieList')->with('error','data berhasil dihapus');
    }
}
