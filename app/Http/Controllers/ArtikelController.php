<?php

namespace App\Http\Controllers;

use App\artikel;
use App\kategoriartikels;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::with('kategoriartikels')->get();
        return view('artikel.index',compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriartikels = kategoriartikels::all();
        return view('artikel.create',compact('kategoriartikels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required|string',
            'kategoriartikels_id'=>'required|string',
            'gambar'=>'required|string',
            'deskripsi'=>'required|string'
        ]);
        $artikel = new artikel;
        $artikel->judul=$request->judul;
        $artikel->kategoriartikels_id=$request->kategoriartikels_id;
        $artikel->gambar=$request->gambar;
        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/img/gambar';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsuccess = $file->move($destinationPath, $filename);
            $gambar->gambar = $filename;
        }
        $artikel->deskripsi=$request->deskripsi;
        $artikel->slug=str_slug($request->judul, '-');
        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = artikel::findOrFail($id);
        $kategoriartikels = kategoriartikels::all();
        $selectedkategoriartikels = artikel::findOrFail($id)->kategoriartikels_id;
        return view('artikel.edit', compact('artikel','kategoriartikels','selectedkategoriartikels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate ([
            'judul'=>'required|string',
            'kategoriartikels_id'=>'required|string',
            'gambar'=>'required|string',
            'deskripsi'=>'required|string'
        ]);
        $artikel = artikel::findOrFail($id);
        $artikel->judul=$request->judul;
        $artikel->kategoriartikels_id=$request->kategoriartikels_id;
        $artikel->gambar=$request->gambar;
        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/img/gambar';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsuccess = $file->move($destinationPath, $filename);
            $gambar->gambar = $filename;
        }
        $artikel->deskripsi=$request->deskripsi;
        $artikel->slug=str_slug($request->judul, '-');
        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index');
    }
}
