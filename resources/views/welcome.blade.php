@extends('layout.main')
@section('title', 'Home')
@section('content')
        <h1>Hello world</h1>
        @if (120 < 15)
            <p> A condição é verdadeira</p>
        @else
            <p>A condição é falsa</p>
        @endif 

        @if ($nome == 'Mateus')
            <p>Olá, Matheus</p>
        @elseif ($nome == 'Baptista')
            <p>Olá, Baptista tens {{ $idade }} anos</p>
        @endif

        <h1>apresentando loop</h1>
        @foreach ($nome as $name)
            <p>{{ $loop->index + 1 }} - {{ $name }}</p>
        @endforeach

        @foreach($cont as $i)
            <p>{{ $i }}</p>
        @endforeach

        <img src="/img/banner.jpg" alt="...">
@endsection