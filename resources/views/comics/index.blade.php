@extends('comics.layouts.layout')


@section('comics')
<div>
@foreach ($comics as $comic)
<div>
    <!--a href="/comics/{{ $comic->id }} "> {{ $comic->title }} </a-->
    <a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }} </a>
    {{-- <form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
        <input type="button" id="deleteButton" value="DELETE">
    </form>
    non mi va bene per via del id--}}
</div>
@endforeach
</div>
@endsection

