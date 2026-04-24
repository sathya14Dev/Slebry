<!-- user/books/show.blade.php -->
@extends('layouts.app')
@section('content')
<h1 class="text-3xl">{{ $book->title }}</h1>
<p>{{ $book->author }}</p>
<p>{{ $book->description }}</p>
<form method="POST" action="{{ route('transactions.store') }}">
    @csrf
    <input type="hidden" name="book_id" value="{{ $book->id }}">
    <button class="bg-blue-600 text-white px-4 py-2">Pinjam</button>
</form>
@endsection