@extends('comics.layouts.layout')

@section('comic')
<h1>{{ $comic->title }}</h1>
    <div>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} cover">
    </div>
    <p>{{ $comic->description }}</p>
<a href="{{ route('comics.index') }}">BACK</a>
@endsection




