<!-- user/dashboard.blade.php -->
@extends('layouts.app')
@section('content')
    <section id="home" class="w-full">  
        <div class="max-w-7xl mx-auto px-6 py-18">
            <div class="flex flex-col-reverse md:flex-row items-center gap-12">
                <div class="md:w-1/2 md:text-left">
                    <h1 class="text-3xl md:text-5xl font-bold leading-tight">
                        Selamat Datang di Perpustakaan Digital <br>
                        <span class="text-red-500">Slebry!</span>
                    </h1>
                    <p class="mt-4 text-gray-600 text-sm md:text-base">
                        Akses koleksi buku sekolah dengan mudah dan cepat
                    </p>
                    <a href="#search"
                        class="group flex md:inline-flex items-center justify-center bg-emerald-600 hover:bg-emerald-700 mt-6 text-white py-2 px-6 rounded-md transition">
                        Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide mt-1 ml-2 w-4 transform transition-transform duration-300 group-hover:translate-x-1 lucide-move-right-icon lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg>
                    </a>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ asset('images/sementara.png') }}" class="w-56 md:w-96" alt="Images Home">
                </div>
            </div>
        </div>
    </section>

    <section id="search" class="w-full bg-cyan-950">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex flex-col items-center text-center max-w-2xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-white">
                    Temukan Buku Favoritmu di Perpustakaan Digital Kami!
                </h2>
                <p class="text-gray-200 text-sm md:text-base mb-8">
                    Jelajahi koleksi buku sekolah yang lengkap dan temukan buku favoritmu dengan
                    mudah. Mulai petualangan membaca sekarang!
                </p>
                <form action="{{ route('books.index') }}" method="GET" class="w-full">
                    <div
                        class="flex w-full bg-white rounded-lg overflow-hidden shadow-sm focus-within:ring-2 focus-within:ring-blue-900">
                        <input type="text" name="search" placeholder="Cari buku..."
                            class="flex-1 px-4 py-3 text-gray-800 outline-none min-w-0">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 sm:px-6 py-3 whitespace-nowrap transition">
                            Cari
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="tentang" class="w-full scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/sementara2.png') }}" class="w-full mx-auto" alt="Tentang Perpustakaan">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-red-600 font-semibold mb-2">
                        Tentang Kami
                    </h2>
                    <h1 class="text-4xl font-bold mb-4">
                        Perpustakaan Digital yang Mendukung
                        <span class="text-red-500">Budaya Membaca</span>
                    </h1>
                    <p class="text-gray-600 mb-4">
                        Perpustakaan hadir sebagai pusat sumber belajar yang mendukung kebutuhan informasi dan pengembangan
                        pengetahuan bagi seluruh penggunanya. Dengan koleksi yang beragam serta layanan yang terus
                        berkembang, perpustakaan menjadi ruang eksplorasi bagi siapa saja yang ingin belajar, meneliti, dan
                        memperluas wawasan.
                    </p>
                    <p class="text-gray-600">
                        Sebagai bagian dari ekosistem pendidikan, perpustakaan berperan dalam menunjang proses pembelajaran,
                        penelitian, serta kontribusi nyata terhadap masyarakat melalui penyediaan informasi yang akurat dan
                        terpercaya.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-3">
                <div class="bg-yellow-300 shadow-sm rounded-lg p-6 text-center hover:shadow-md transition">
                    <div class="flex justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-library-big-icon w-10 lucide-library-big">
                            <rect width="8" height="18" x="3" y="3" rx="1" />
                            <path d="M7 3v18" />
                            <path
                                d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold">500+</h3>
                    <p class="text-gray-500 text-sm">Total Buku</p>
                </div>
                <div class="bg-red-500 shadow-sm rounded-lg p-6 text-center hover:shadow-md transition">
                    <div class="flex justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide w-10 lucide-users-icon lucide-users">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <circle cx="9" cy="7" r="4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold">200+</h3>
                    <p class="text-gray-500 text-sm">Pengguna</p>
                </div>
                <div class="bg-green-500 shadow-sm rounded-lg p-6 text-center hover:shadow-md transition">
                    <div class="flex justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-book-open-text-icon w-10 lucide-book-open-text">
                            <path d="M12 7v14" />
                            <path d="M16 12h2" />
                            <path d="M16 8h2" />
                            <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" />
                            <path d="M6 12h2" />
                            <path d="M6 8h2" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold">120+</h3>
                    <p class="text-gray-500 text-sm">Dipinjam</p>
                </div>
                <div class="bg-blue-500 shadow-sm rounded-lg p-6 text-center hover:shadow-md transition">
                    <div class="text-red-500 text-3xl mb-2">
                        ⭐
                    </div>
                    <h3 class="text-2xl font-bold">4.8</h3>
                    <p class="text-gray-500 text-sm">Rating</p>
                </div>
            </div>
        </div>
    </section>

    <section id="popular-books" class="w-full bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="md:text-center max-w-2xl mx-auto mb-6">
                <h2 class="text-red-600 font-semibold mb-2">
                    Buku Terpopuler
                </h2>
                <h1 class="text-3xl md:text-4xl font-bold mb-2">
                    Buku-buku Terbaik di Perpustakaan Digital Membaca
                </h1>

                <p class="text-gray-600">
                    Temukan koleksi buku paling populer yang sering dibaca dan direkomendasikan
                </p>
            </div>

            {{-- pemanggilan components book --}}
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                {{-- @foreach ($books as $book) --}}
                {{-- <x-book-card :book="$book" /> --}}
                <x-book-card></x-book-card>
                {{-- @endforeach --}}
            </div>

        </div>
    </section>
@endsection
