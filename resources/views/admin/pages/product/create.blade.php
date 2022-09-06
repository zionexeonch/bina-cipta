@extends('admin.layouts.template')
@section('content')
    <form action="" method="POST" class="mb-3">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="barcode" class="block mb-2 text-sm font-medium">Barcode</label>
                <input type="text" id="barcode"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="No. Barcode" required="" name="barcode">
            </div>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium">Nama Produk</label>
                <input type="text" id="name"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Produk" required="" name="name">
            </div>
            <div>
                <label for="purchase_price" class="block mb-2 text-sm font-medium">Harga Beli</label>
                <input type="number" id="purchase_price"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Harga Beli" required="" name="purchase_price">
            </div>
            <div>
                <label for="price" class="block mb-2 text-sm font-medium">Harga Jual</label>
                <input type="number" id="price"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Harga Jual" required="" name="price">
            </div>
        </div>
        <b class="text-center mx-auto">Stok Gudang :</b>
        <div class="grid gap-6 md:grid-cols-6 grid-cols-3">
            <div>
                <label for="xs" class="block mb-2 text-sm font-medium">XS</label>
                <input type="number" id="xs"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="XS" required="" name="xs">
            </div>
            <div>
                <label for="s" class="block mb-2 text-sm font-medium">S</label>
                <input type="number" id="s"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="S" required="" name="s">
            </div>
            <div>
                <label for="m" class="block mb-2 text-sm font-medium">M</label>
                <input type="number" id="m"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="M" required="" name="m">
            </div>
            <div>
                <label for="lg" class="block mb-2 text-sm font-medium">LG</label>
                <input type="number" id="lg"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="LG" required="" name="lg">
            </div>
            <div>
                <label for="xl" class="block mb-2 text-sm font-medium">XL</label>
                <input type="number" id="xl"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="XL" required="" name="xl">
            </div>
            <div>
                <label for="xxl" class="block mb-2 text-sm font-medium">XXL</label>
                <input type="number" id="xxl"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="XXL" required="" name="xxl">
            </div>
        </div>
        <b class="text-center mx-auto mt-3">Stok Toko :</b>
        <div class="grid gap-6 md:grid-cols-6 grid-cols-3">
            <div>
                <label for="xs" class="block mb-2 text-sm font-medium">XS</label>
                <input type="number" id="xs"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="XS" required="" name="xs">
            </div>
            <div>
                <label for="s" class="block mb-2 text-sm font-medium">S</label>
                <input type="number" id="s"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="S" required="" name="s">
            </div>
            <div>
                <label for="m" class="block mb-2 text-sm font-medium">M</label>
                <input type="number" id="m"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="M" required="" name="m">
            </div>
            <div>
                <label for="lg" class="block mb-2 text-sm font-medium">LG</label>
                <input type="number" id="lg"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="LG" required="" name="lg">
            </div>
            <div>
                <label for="xl" class="block mb-2 text-sm font-medium">XL</label>
                <input type="number" id="xl"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="XL" required="" name="xl">
            </div>
            <div>
                <label for="xxl" class="block mb-2 text-sm font-medium">XXL</label>
                <input type="number" id="xxl"
                    class="shadow-md border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="XXL" required="" name="xxl">
            </div>
        </div>
        <button type="submit"
            class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        <a href="{{ route('admin-product.index') }}" type="button"
            class="mt-3 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Batal</a>
    </form>
@endsection
