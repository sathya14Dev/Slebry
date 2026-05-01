{{-- user/books/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="max-w-7x mx-auto px-6 py-18">
        {{-- Header Section --}}
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Koleksi Buku</h1>
            <p class="text-gray-600">Temukan berbagai koleksi buku menarik di perpustakaan kami</p>
        </div>

        {{-- Search & Filter Section --}}
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <form action="{{ route('books.index') }}" method="GET" class="space-y-4">
                <div class="flex flex-col md:flex-row gap-4">
                    {{-- Search Input --}}
                    <div class="flex-1">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            <i class="fas fa-search mr-2"></i>Cari Buku
                        </label>
                        <div class="relative">
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Cari berdasarkan judul atau penulis..."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit" class="absolute right-2 top-2 text-gray-400 hover:text-blue-500">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Category Filter --}}
                    <div class="w-full md:w-64">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            <i class="fas fa-filter mr-2"></i>Kategori
                        </label>
                        <select name="category"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Semua Kategori</option>
                            <option value="fiksi" {{ request('category') == 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                            <option value="non-fiksi" {{ request('category') == 'non-fiksi' ? 'selected' : '' }}>Non-Fiksi
                            </option>
                            <option value="pendidikan" {{ request('category') == 'pendidikan' ? 'selected' : '' }}>
                                Pendidikan</option>
                            <option value="teknologi" {{ request('category') == 'teknologi' ? 'selected' : '' }}>Teknologi
                            </option>
                        </select>
                    </div>

                    {{-- Sort Options --}}
                    <div class="w-full md:w-48">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            <i class="fas fa-sort mr-2"></i>Urutkan
                        </label>
                        <select name="sort"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Terlama</option>
                            <option value="title_asc" {{ request('sort') == 'title_asc' ? 'selected' : '' }}>Judul A-Z
                            </option>
                            <option value="title_desc" {{ request('sort') == 'title_desc' ? 'selected' : '' }}>Judul Z-A
                            </option>
                        </select>
                    </div>

                    {{-- Reset Button --}}
                    <div class="flex items-end">
                        <a href="{{ route('books.index') }}"
                            class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-lg transition duration-300">
                            <i class="fas fa-sync-alt mr-2"></i>Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>

        {{-- Books Grid --}}
        @if ($books->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($books as $book)
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                        {{-- Book Cover --}}
                        <div class="relative h-64 bg-gradient-to-br from-blue-400 to-purple-500 overflow-hidden">
                            @if ($book->cover_image)
                                <img src="{{ Storage::url($book->cover_image) }}" alt="{{ $book->title }}"
                                    class="w-full h-full object-cover">
                            @else
                                <div class="flex items-center justify-center h-full">
                                    <i class="fas fa-book text-6xl text-white opacity-50"></i>
                                </div>
                            @endif

                            {{-- Availability Badge --}}
                            <div class="absolute top-2 right-2">
                                @if ($book->stock > 0)
                                    <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                                        <i class="fas fa-check-circle mr-1"></i>Tersedia
                                    </span>
                                @else
                                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">
                                        <i class="fas fa-times-circle mr-1"></i>Dipinjam
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Book Info --}}
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800 mb-1 truncate" title="{{ $book->title }}">
                                {{ $book->title }}
                            </h3>
                            <p class="text-gray-600 text-sm mb-2">
                                <i class="fas fa-user mr-1"></i>{{ $book->author }}
                            </p>

                            {{-- Rating Stars --}}
                            @if ($book->rating)
                                <div class="flex items-center mb-2">
                                    <div class="flex text-yellow-400">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= floor($book->rating))
                                                <i class="fas fa-star"></i>
                                            @elseif($i - $book->rating <= 0.5)
                                                <i class="fas fa-star-half-alt"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="text-xs text-gray-500 ml-1">({{ $book->rating_count ?? 0 }})</span>
                                </div>
                            @endif

                            {{-- Action Buttons --}}
                            <div class="flex gap-2 mt-3">
                                <a href="{{ route('books.show', $book->id) }}"
                                    class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-center px-3 py-2 rounded-lg transition duration-300">
                                    <i class="fas fa-info-circle mr-1"></i>Detail
                                </a>
                                @if ($book->stock > 0)
                                    <button onclick="borrowBook({{ $book->id }})"
                                        class="bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg transition duration-300">
                                        <i class="fas fa-hand-holding-heart"></i>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-8">
                {{ $books->links() }}
            </div>
        @else
            {{-- Empty State --}}
            <div class="bg-white rounded-lg shadow-md p-12 text-center">
                <i class="fas fa-book-open text-6xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Tidak Ada Buku Ditemukan</h3>
                <p class="text-gray-500">Coba cari dengan kata kunci yang berbeda atau reset filter</p>
                <a href="{{ route('books.index') }}"
                    class="inline-block mt-4 bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition duration-300">
                    <i class="fas fa-sync-alt mr-2"></i>Reset Filter
                </a>
            </div>
        @endif
    </div>

    @push('scripts')
        <script>
            function borrowBook(bookId) {
                if (confirm('Apakah Anda yakin ingin meminjam buku ini?')) {
                    fetch(`/books/${bookId}/borrow`, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Buku berhasil dipinjam!');
                                location.reload();
                            } else {
                                alert(data.message || 'Gagal meminjam buku');
                            }
                        });
                }
            }
        </script>
    @endpush
@endsection
