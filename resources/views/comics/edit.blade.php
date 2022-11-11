@extends('comics.layouts.layout')


@section('edit')
<form method="POST" action="{{ route('comics.update', $comic->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $comic->title }}">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" cols="30" rows="10">{{ $comic->description }}</textarea>
    </div>
    <div>
        {{-- ci sarebbe anche l'input image o url--}}
        <label for="thumb">Url Img:</label>
        <input type="url" name="thumb" value="{{ $comic->thumb }}">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" step=".01" name="price" value="{{ $comic->price }}">
    </div>
    <div>
        <label for="series">Series:</label>
        <input type="text" name="series" value="{{ $comic->series }}">
    </div>
    <div>
        <label for="sale_date">Sale data:</label>
        <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div>
        <label for="type">Type:</label>
        <input type="text" name="type" value="{{ $comic->type }}">
    </div>

    <div>
        <input type="submit" value="Edit" >
    </div>

</form>
@endsection
