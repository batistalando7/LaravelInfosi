@extends('layout.main')
@section('title', $event->title)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p class="event-city"> <ion-icon class="location-icon" name="location-outline"></ion-icon> {{ $event->city }}</p>
            <p class="events-participants"><ion-icon name="people-outline"></ion-icon> x participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Dono do envento</p>
            <a href="#" id="event-submit" class="btn btn-primary">Confirmar presença</a>
            @if($event->items)
            <h3>O evento conta com:</h3>
            <ul id="items-list">
                @foreach($event->items as $item)
                    <li><ion-icon name="checkmark-outline"></ion-icon> {{ $item }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div id="description-container" class="col-md-12">
            <h3>Sobre o evento:</h3>
            <p class="event-description">{{ $event->description }}</p>
        </div>
    </div>
</div>

@endsection