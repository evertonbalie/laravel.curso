@extends('layout.main')
@section('title','Produtos')
@section('content')

{{-- <h1>Produtos :{{ $id }}</h1> --}}
@if($busca!='')
<p>produto que estou buscand0: {{ $busca }}</p>
@endif
@endsection
