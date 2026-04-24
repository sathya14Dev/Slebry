<!-- user/transactions/index.blade.php -->
@extends('layouts.app')
@section('content')
<h1 class="text-2xl">Riwayat</h1>
<table class="w-full">
@foreach($transactions as $t)
<tr>
<td>{{ $t->book->title }}</td>
<td>{{ $t->status }}</td>
</tr>
@endforeach
</table>
@endsection