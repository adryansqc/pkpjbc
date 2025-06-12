<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Foto;
use App\Models\Galeri;
use App\Models\Produk;
use App\Models\ProdukList;
use App\Models\Video;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $imageSlider = Foto::where('published', 1)->take(2)->get();
        $unggulan = Produk::where('unggulan', 1)->latest()->take(4)->get();
        $galeri = Galeri::where('published', 1)->latest()->take(6)->get();
        $video = Video::where('aktif', 1)->first();
        $listProduk = ProdukList::orderBy('id', 'asc')->get();
        $berita = Berita::where('status', 1)->latest()->take(3)->get();
        return view('fe.halaman.home', compact('imageSlider', 'unggulan', 'galeri', 'listProduk', 'berita', 'video'));
    }

    public function tentang()
    {
        $video = Video::where('aktif', 1)->first();
        return view('fe.halaman.tentang', compact('video'));
    }
    public function unggulan()
    {
        $produk = Produk::latest()->paginate(10);
        return view('fe.pages.unggulan', compact('produk'));
    }
    public function galeri()
    {
        $galeri = Galeri::latest()->paginate(10);
        return view('fe.pages.galeri', compact('galeri'));
    }
    public function downloadPriceList()
    {
        $listProduk = ProdukList::orderBy('id', 'asc')->get();
        $pdf = Pdf::loadView('fe.pages.price-list-pdf', compact('listProduk'));
        return $pdf->download('price-list-jbc.pdf');
    }

    public function berita()
    {
        $berita = Berita::where('status', 1)->latest()->paginate(9);
        return view('fe.halaman.berita', compact('berita'));
    }

    public function beritaShow($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $berita->increment('view');
        $recentNews = Berita::where('status', 1)
            ->take(5)
            ->get();
        return view('fe.halaman.berita_show', compact('berita', 'recentNews'));
    }
}
