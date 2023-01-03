@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    @foreach ($events as $event)
        <p>
            {{$event->title}} -- {{$event->description}}
        </p>
    @endforeach
</div>
@endsection