<!-- user/books/index.blade.php -->
@extends('layouts.app')
@section('content')
<h1 class="text-2xl mb-4">Books</h1>
<div class="grid grid-cols-4 gap-4">
@foreach($books as $book)
    <div class="bg-white p-4 shadow rounded">
        <h2>{{ $book->title }}</h2>
        <p>{{ $book->author }}</p>
        <a href="{{ route('books.show', $book->id) }}">Detail</a>
    </div>
@endforeach
</div>
@endsection