<!-- admin/books/create.blade.php -->
@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('admin.books.store') }}">
@csrf
<input type="text" name="title" placeholder="Title">
<button>Save</button>
</form>
@endsection