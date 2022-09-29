@extends('Home.layouts.template')
@section('content2')
<div class="container mx-auto my-8">

    <div class="flex flex-warp justify-center mx-4">
        <div
            class="flex flex-col items-start md:items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                src="img/bootstrap.png" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Rambut 8cm
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Deskripsi : ...</p>
                <h5 class="mb-3 text-1xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Harga : Rp. 50.000,00
                </h5>
                <span>
                    <a href="/produk"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <- Kembali </a>
                            &nbsp;
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Pesan Sekarang
                            </a>
                </span>
            </div>
        </div>
    </div>


</div>
@endsection
