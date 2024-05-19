@extends('base')

@section('title', 'RAPIDO')

@section('content')

    <a href="{{route('races.create')}}">
        <button class="add-button">Ajouter une Course</button>
    </a>
    @include('races.tab_races')

    {{$races->appends(request()->query())->render()}}

@endsection