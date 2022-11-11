@extends('comics.layouts.layout')

@section('show')
<h1>{{ $comic->title }}</h1>
    <div>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} cover">
    </div>
    <p>{{ $comic->description }}</p>

<form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="POST" id="deleteForm">
    @csrf
    @method('DELETE')
    <input type="button" id="deleteButton" value="DELETE">
    <a href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
</form>
<a href="{{ route('comics.index') }}">BACK</a>
@endsection




