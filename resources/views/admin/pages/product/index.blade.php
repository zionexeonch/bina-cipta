@extends('admin.layouts.template')
@section('content')
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-white dark:text-gray-400">
            <thead class="text-xs uppercase text-white bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-2 px-6">
                        #
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Gambar
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Nama Produk / barcode
                    </th>
                    <th scope="col" class="py-2 px-6 text-center">
                        Harga beli
                    </th>
                    <th scope="col" class="py-2 px-6 text-center">
                        Harga jual
                    </th>
                    <th scope="col" class="py-2 px-6 text-center">
                        Stok toko
                    </th>
                    <th scope="col" class="py-2 px-6 text-center">
                        Stok gudang
                    </th>
                    <th scope="col" class="py-2 px-6 text-center">
                        Kategori
                    </th>
                    <th scope="col" colspan="3" class="py-2 px-6 text-center">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50 text-black">
                    <th class="border m-auto text-center rounded-full w-auto">
                        1
                    </th>
                    <td class="items-center py-3 px-6 dark:text-white">
                        <img class="w-10 h-10" src="/PRODUK.png" alt="Jese image">
                    </td>
                    <td scope="row"
                        class="flex items-center py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white max-w-sm">
                        <div class="pl-3">
                            <div class="text-base text-black font-semibold">Coca-cola</div>
                            <div class="block font-normal text-black">05958384859593</div>
                        </div>
                    </td>
                    <td class="py-2 px-6 text-center">
                        Rp. 200.000
                    </td>
                    <td class="py-2 px-6 text-center">
                        Rp. 200.000
                    </td>
                    <td class="py-2 px-6 text-center">
                        10
                    </td>
                    <td class="py-2 px-6 text-center">
                        20
                    </td>
                    <td class="py-2 px-6 text-center">
                        Minuman
                    </td>
                    <td class="py-2 px-3">
                        <a href="{{ route('admin-product.show', [1]) }}"
                            class="p-3 bg-white border-blue-800 border hover:bg-blue-800 hover:text-white text-blue-800 text-1xl rounded-lg">Detail</a>
                    </td>
                    <td class="py-2 px-3">
                        <a href="#"
                            class="p-3 bg-white text-black border-yellow-400 border hover:bg-yellow-400 hover:text-black text-1xl rounded-lg">Edit</a>
                    </td>
                    <td class="py-2 px-3">
                        <a href="#" type="submit" onclick="return confirm('Yakin mau dihapus?')"
                            class="p-3 bg-white text-red-600 hover:bg-red-600 border hover:text-white border-red-600 text-sm rounded-lg">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
