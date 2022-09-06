@extends('admin.layouts.template')
@section('content')
    <div class="grid gap-4 md:grid-cols-2 mx-auto">
        <div class="md:gap-1">
            <img src="/PRODUK.png" alt="" class="shadow-lg rounded-lg mx-auto">
        </div>
        <div class="md:gap-3 border rounded-lg shadow-md">
            <div class="my-4 mx-4">
                <p><b>Barcode:</b> 9953837483898</p>
                <p><b>Nama:</b> Coca-cola</p>
                <p><b>Stok Gudang:</b></p>
                <div class="grid gap-6 grid-cols-2 md:grid-cols-3 mx-auto">
                    <p>XS: 1</p>
                    <p>S: 1</p>
                    <p>M: 1</p>
                    <p>LG: 1</p>
                    <p>XL: 1</p>
                    <p>XXL: 1</p>
                </div>
                <p class="mt-3"><b>Stok Toko:</b></p>
                <div class="grid gap-6 grid-cols-2 md:grid-cols-3 mx-auto">
                    <p>XS: 1</p>
                    <p>S: 1</p>
                    <p>M: 1</p>
                    <p>LG: 1</p>
                    <p>XL: 1</p>
                    <p>XXL: 1</p>
                </div>
            </div>
        </div>
        <div class="border rounded-lg my-5 shadow-md">
            <h2 class="text-2xl text-center bg-black text-white rounded-t-lg">Tambah Stok Gudang</h2>
            <div class="grid gap-6 grid-cols-1 md:grid-cols-2 my-4 mx-4">
                <div>
                    <label for="">XS</label>
                    <input type="text" class="w-full p-2 pl-2 border focus:border-bg-black rounded-lg" placeholder="XS">
                </div>
                <div>
                    <label for="">S</label>
                    <input type="text" class="w-full p-2 mx-auto border focus:border-bg-black rounded-lg"
                        placeholder="S">
                </div>
                <div>
                    <label for="">M</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="M">
                </div>
                <div>
                    <label for="">LG</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="LG">
                </div>
                <div>
                    <label for="">XL</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="XL">
                </div>
                <div>
                    <label for="">XXL</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="XXL">
                </div>
                <div>
                    <button class="bg-blue-700 hover:bg-blue-800 text-white p-2 rounded-lg"><i class="fa fa-plus"></i>
                        Tambah ke Gudang</button>
                </div>
            </div>
        </div>
        <div class="border rounded-lg my-5 shadow-md">
            <h2 class="text-2xl text-center bg-black text-white rounded-t-lg">Tambah Stok Toko</h2>
            <div class="grid gap-6 grid-cols-1 md:grid-cols-2 my-4 mx-4">
                <div>
                    <label for="">XS</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="XS">
                </div>
                <div>
                    <label for="">S</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="S">
                </div>
                <div>
                    <label for="">M</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="M">
                </div>
                <div>
                    <label for="">LG</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="LG">
                </div>
                <div>
                    <label for="">XL</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="XL">
                </div>
                <div>
                    <label for="">XXL</label>
                    <input type="text" class="w-full p-2 border focus:border-bg-black rounded-lg" placeholder="XXL">
                </div>
                <div>
                    <button class="bg-blue-700 hover:bg-blue-800 text-white p-2 rounded-lg"><i class="fa fa-plus"></i>
                        Update Stok Toko</button>
                </div>
            </div>
        </div>
    </div>
@endsection
