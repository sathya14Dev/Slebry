@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">

        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-md">

            <h1 class="text-2xl font-bold text-center mb-6">
                Login
            </h1>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-2 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

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

                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded transition">
                    Login
                </button>

            </form>

            <p class="text-center text-sm mt-4">
                Belum punya akun?
                {{-- <a href="{{ route('register') }}" class="text-blue-600 hover:underline">
                    Daftar
                </a> --}}
                <a href="/register" class="text-blue-600 hover:underline">
                    Daftar
                </a>
            </p>

        </div>

    </div>
@endsection
