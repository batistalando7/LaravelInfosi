@extends('layout.main')
@section('title', 'Home')
@section('content')

<div id="search-events" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar eventos...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias:</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <div class="card-date">{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</div>
                <div class="card-title">{{ $event->title }}</div>
                <div class="card-participants">x-participantes</div>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">saber mais</a>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection