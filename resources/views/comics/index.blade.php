@extends('comics.layouts.layout')

@section('comics')
@foreach ($comics as $comic)
    <div>
        <a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }} </a>
    </div>
@endforeach
@endsection

