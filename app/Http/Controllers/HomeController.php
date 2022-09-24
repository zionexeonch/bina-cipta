<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index', [
            'title' => 'Beranda | BINA CIPTA',
        ]);
    }
    public function produk()
    {
        return view('Home.produk', [
            'title' => 'Produk | BINA CIPTA',
        ]);
    }
    public function faq()
    {
        return view('Home.faq', [
            'title' => 'FAQ | BINA CIPTA',
        ]);
    }
    public function tentang_kami()
    {
        return view('Home.tentang-kami', [
            'title' => 'Tentang Kami | BINA CIPTA',
        ]);
    }
    public function kontak_kami()
    {
        return view('Home.kontak-kami', [
            'title' => 'Kontak Kami | BINA CIPTA',
        ]);
    }
    public function pembayaran()
    {
        return view('Home.pembayaran', [
            'title' => 'Via Pembayaran | BINA CIPTA',
        ]);
    }
    public function kebijakan()
    {
        return view('Home.kebijakan', [
            'title' => 'Kebijakan Pribadi | BINA CIPTA',
        ]);
    }
    public function syarat()
    {
        return view('Home.syarat', [
            'title' => 'Syarat Ketentuan | BINA CIPTA',
        ]);
    }
}