<?php

namespace App\Http\Controllers;
use App\table_barang;
use App\kategori;
use App\gambar;
use App\artikel;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function tentang()
    {
        return view('frontend.tentang');
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function produk()
    {
        $table_barang = table_barang::all();
        $kategori = kategori::all();
        return view('frontend.produk',compact('table_barang','kategori'));
    }

    public function kontak()
    {
        return view('frontend.kontak');
    }

    public function galeri()
    {
        $gambar = gambar::paginate(6);
        return view('frontend.galeri',compact('gambar'));
    }

    public function artikel()
    {
        $artikel = artikel::all();
        return view('frontend.artikel',compact('artikel'));
    }

    public function single(table_barang  $table_barang)
    {
        return view('frontend.single',compact('table_barang'));
    }
}
