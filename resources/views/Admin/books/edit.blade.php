<!-- admin/books/edit.blade.php -->
@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('admin.books.update', $book->id) }}">
@csrf
@method('PUT')
<input type="text" name="title" value="{{ $book->title }}">
<button>Update</button>
</form>
@endsection