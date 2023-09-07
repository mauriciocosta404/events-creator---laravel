@extends('layouts.main')
@section('title', 'My Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Get for some events</h1>
    <form action="">
        <input type="text" name="" id="search" class=" form-control" placeholder="Search">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Nexts Events</h2>
    <p class="subtitle">See the events in next days</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">10/09/2023</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <div class="card-participants">20 participantes</div>
                    <a href="" class="btn btn-primary">Saber mais</a>
                </div>    
            </div>    
        @endforeach
    </div>
</div>

@endsection