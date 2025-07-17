@extends('layout.main')
@section('title', 'Products Page')
@section('content')

        <h1>welcome to products place</h1>

        @if(isset($busca))
            <p>Buscando produto: {{$busca}}</p>
        @endif
@endsection