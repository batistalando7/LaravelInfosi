@extends('layout.main')
@section('title', 'Home')
@section('content')

<div id="search-events" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="get">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar eventos...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if(request('search'))
    <h2>Buscando por: {{ request('search') }}</h2>
    @else
    <h2>Próximos eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias:</p>
    @endif
    <div id="cards-container" class="row">

        @foreach ($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <div class="card-date">{{date('d/m/Y', strtotime($event->date)) }}</div>
                <div class="card-title">{{ $event->title }}</div>
                <div class="card-participants">x-participantes</div>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">saber mais</a>
            </div>
        </div>
        @endforeach
        @if((count($events) === 0) && request('search'))
        <p class="events-message">Não foi possível encontrar eventos com a busca "{{ request('search') }}" <a href="/">ver todos eventos</a></p>
        @elseif(count($events) === 0)
        <p class="events-message">Não há eventos disponíveis</p>
        @endif
    </div>

</div>

@endsection