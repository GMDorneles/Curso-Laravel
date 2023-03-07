@extends('layouts.main')

@section('title', 'hDC Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um Evento</h1>
        <form action="/" method="get">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Buscando por: </h2>
        <h2>Próximos Eventos</h2>
        <p>Veja os Eventos dos Próximos dias</p>
        <div id="cards-container" class="row">
            @if (count($events) > 0)
                @foreach ($events as $event)
                    <div class="card col-md-3">
                        <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date"> 10/09/2020 </p>
                            <h5 class="card-title"> {{ $event->title }} </h5>
                            <p class="card-participants">x Participantes</p>
                            <a href="#" class="btn btn-primary">Saber Mais</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
