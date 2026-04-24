<!-- admin/books/index.blade.php -->
@extends('layouts.app')
@section('content')
<h1 class="text-2xl">Manage Books</h1>
<a href="{{ route('admin.books.create') }}">Tambah</a>
<table class="w-full">
@foreach($books as $book)
<tr>
<td>{{ $book->title }}</td>
<td>
<a href="{{ route('admin.books.edit', $book->id) }}">Edit</a>
</td>
</tr>
@endforeach
</table>
@endsection