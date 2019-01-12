<?php

namespace App\Http\Controllers;

use App\kategoriartikels;
use Illuminate\Http\Request;

class KategoriartikelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriartikels = kategoriartikels::all();
        return view('kategoriartikels.index',compact('kategoriartikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoriartikels.create');
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
            'nama_kategori'=>'required|string'
        ]);
        $kategoriartikels = new kategoriartikels;
        $kategoriartikels->nama_kategori=$request->nama_kategori;
        $kategoriartikels->save();
        return redirect()->route('kategoriartikels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategoriartikels  $kategoriartikels
     * @return \Illuminate\Http\Response
     */
    public function show(kategoriartikels $kategoriartikels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategoriartikels  $kategoriartikels
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoriartikels = kategoriartikels::findOrFail($id);
        return view('kategoriartikels.edit', compact('kategoriartikels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategoriartikels  $kategoriartikels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate ([
            'nama_kategori'=>'required|string'
        ]);
        $kategoriartikels = kategoriartikels::findOrFail($id);
        $kategoriartikels->nama_kategori=$request->nama_kategori;
        $kategoriartikels->save();
        return redirect()->route('kategoriartikels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategoriartikels  $kategoriartikels
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriartikels = kategoriartikels::findOrFail($id);
        $kategoriartikels->delete();
        return redirect()->route('kategoriartikels.index');
    }
}
