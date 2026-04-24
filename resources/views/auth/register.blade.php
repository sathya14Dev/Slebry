@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">

        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-md">

            <h1 class="text-2xl font-bold text-center mb-6">
                Register
            </h1>

            {{-- <form method="POST" action="{{ route('register') }}"> --}}
            <form method="POST" action="/register">
                @csrf

                <!-- NAME -->
                <div class="mb-4">
                    <label class="block text-sm mb-1">Nama</label>
                    <input type="text" name="name"
                        class="w-full border rounded px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none">

                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- EMAIL -->
                <div class="mb-4">
                    <label class="block text-sm mb-1">Email</label>
                    <input type="email" name="email"
                        class="w-full border rounded px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none">

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div class="mb-4">
                    <label class="block text-sm mb-1">Password</label>
                    <input type="password" name="password"
                        class="w-full border rounded px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none">

                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- CONFIRM PASSWORD -->
                <div class="mb-4">
                    <label class="block text-sm mb-1">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation"
                        class="w-full border rounded px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none">
                </div>

                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded transition">
                    Register
                </button>

            </form>

            <p class="text-center text-sm mt-4">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                    Login
                </a>
            </p>

        </div>

    </div>
@endsection
