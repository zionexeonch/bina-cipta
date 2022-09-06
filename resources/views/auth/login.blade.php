@extends('admin.layouts.template')
@section('content')
    <h3 class="text-center text-3xl bg-black text-white py-3 max-w-sm mx-auto rounded-t-lg">Login Administrator</h3>
    <div class="block items-center rounded-b-lg shadow-md p-6 max-w-sm border-gray-200 bg-white mx-auto border">
        <form action="" method="post">
            <div>
                <label for="email" class="text-xl">Email</label>
                <input type="email" class="p-2 w-full border rounded-md border-gray-200 focus:border-black"
                    placeholder="pos@gmail.com">
            </div>
            <div class="mt-8">
                <label for="password" class="text-xl">Password</label>
                <input type="password" class="p-2 w-full border border-gray-200 focus:border-black rounded-md"
                    placeholder="Masukan password">
            </div>
            <div>
                <button type="submit"
                    class="text-2xl text-blue-600 bg-white border-2 border-blue-600 hover:bg-blue-600 hover:text-white rounded-lg p-1 mt-5">Login</button>
            </div>
        </form>
    </div>
@endsection
