<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index', [
            'title' => 'Welcome to Bina Cipta',
        ]);
    }
    public function produk()
    {
        return view('Home.produk', [
            'title' => 'Produk',
        ]);
    }
    public function faq()
    {
        return view('Home.faq', [
            'title' => 'FAQ',
        ]);
    }
    public function tentang_kami()
    {
        return view('Home.tentang-kami', [
            'title' => 'Tentang Kami',
        ]);
    }
    public function kontak_kami()
    {
        return view('Home.kontak-kami', [
            'title' => 'Kontak Kami',
        ]);
    }
}