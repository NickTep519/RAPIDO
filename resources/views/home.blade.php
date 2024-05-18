@extends('base')

@section('title', 'RAPIDO')

@section('content')

    <a href="{{route('race.create')}}">
        <button class="add-button">Ajouter une Course</button>
    </a>
    @include('races.tab_races')
@endsection