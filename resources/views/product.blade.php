@extends('layout.main')
@section('title', 'Product Page')
@section('content')

<h1>welcome to product page</h1>
@if(isset($id))
<p>Exibindo produto {{$id}}</p>
@endif

@endsection