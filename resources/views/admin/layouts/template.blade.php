<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="antialiased">


    <nav
        class="bg-white sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/admin-dashboard" class="flex items-center ml-3 sm:ml-0">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> --}}
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Bina Cipta</span>
            </a>
            <div class="flex md:order-2">
                <a href="/login" type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/admin-dashboard"
                            class="block py-2 pr-4 pl-3 text-white rounded hover:text-white md:hover:bg-transparent md:hover:text-white md:hover:bg-blue-800 md:p-2 {{ request()->is('admin-dashboard') ? 'text-black bg-white md:bg-white md:text-black p-3' : 'md:text-white' }}"
                            aria-current="page">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('admin-product.index') }}"
                            class="block py-2 pr-4 pl-3 text-white rounded hover:text-white md:hover:bg-transparent md:hover:text-white md:hover:bg-blue-800 md:p-2 {{ request()->is('admin-product') ? 'text-black bg-white md:bg-white md:text-black p-3' : 'md:text-white' }}"
                            aria-current="page">Produk</a>
                    </li>
                    <li>
                        <a href="{{ route('admin-storage.index') }}"
                            class="block py-2 pr-4 pl-3 text-white rounded hover:text-white md:hover:bg-transparent md:hover:text-white md:hover:bg-blue-800 md:p-2 {{ request()->is('admin-storage') ? 'text-black bg-white md:bg-white md:text-black p-3' : 'md:text-white' }}"
                            aria-current="page">Gudang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- <div class="mx-10 max-w-lg">
        <div role="status">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mt-20 my-7">
                <h1 class="text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
            </div>
            <div class="max-w-lg shadow-md ml-7">
                @yield('content')
            </div>
        </div>
    </div> --}}
    <header class="bg-white shadow mt-16 sm:mt-20">
        @if ($title === 'Produk')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <a href="{{ route('admin-product.create') }}"
                    class="hover:bg-blue-500 hover:text-white p-2 rounded-lg bg-white text-blue-500 border-2 border-blue-500">Tambah
                    Produk</a>
            </div>
        @elseif ($title === 'Detail Gudang')
            <div
                class="container flex flex-wrap justify-between items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="flex text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
                <a href="{{ route('admin-storage.index') }}"
                    class="hover:bg-gray-500 hover:text-white p-2 rounded-lg bg-white text-gray-500 border-2 border-gray-500"><i
                        class="fa fa-circle-left"></i> Kembali</a>
            </div>
        @elseif ($title === 'Dashboard')
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
            </div>
        @elseif ($title === 'Gudang')
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl tracking-tight font-bold text-gray-900">{{ $title }}</h1>
            </div>
        @endif
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="rounded-lg h-96">
                    @yield('content')
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>


    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <script src="/js/fas.js"></script>
</body>

</html>
