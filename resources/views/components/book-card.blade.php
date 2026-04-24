<div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
    <div class="h-52 bg-gray-100 overflow-hidden">
        <img src="{{ asset('images/contohbuku.png') }}"
            class="w-full h-full object-cover hover:scale-105 transition duration-300" alt="Book Cover">
    </div>
    <div class="p-4">
        <h3 class="font-semibold text-sm mb-1 line-clamp-2">
            {{-- {{ $book->title ?? 'Judul Buku' }} --}}
            judul buku
        </h3>
        <p class="text-gray-500 text-xs mb-3">
            {{-- {{ $book->author ?? 'Penulis' }} --}}
            penulis
        </p>
        <a href="{{ route('books.show', $book->id ?? 1) }}" class="text-blue-600 text-sm font-medium hover:underline">
            Lihat Detail →
        </a>
    </div>
</div>
<div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
    <div class="h-52 bg-gray-100 overflow-hidden">
        <img src="{{ asset('images/contohbuku.png') }}"
            class="w-full h-full object-cover hover:scale-105 transition duration-300" alt="Book Cover">
    </div>
    <div class="p-4">
        <h3 class="font-semibold text-sm mb-1 line-clamp-2">
            {{-- {{ $book->title ?? 'Judul Buku' }} --}}
            judul buku
        </h3>
        <p class="text-gray-500 text-xs mb-3">
            {{-- {{ $book->author ?? 'Penulis' }} --}}
            penulis
        </p>
        <a href="{{ route('books.show', $book->id ?? 1) }}" class="text-blue-600 text-sm font-medium hover:underline">
            Lihat Detail →
        </a>
    </div>
</div>