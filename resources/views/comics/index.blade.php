@extends('comics.layouts.layout')


@section('comics')
<div>
@foreach ($comics as $comic)
<div>
    <!--a href="/comics/{{ $comic->id }} "> {{ $comic->title }} </a-->
    <a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }} </a>
  <form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="POST" >
        @csrf
        @method('DELETE')
        <input type="submit" class="delete-btn" value="DELETE">
    </form>

</div>
@endforeach
</div>
@endsection

