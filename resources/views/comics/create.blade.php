@extends('comics.layouts.layout')


@section('create')
<form method="POST" action="{{ route('comics.store') }}">
    @csrf

    <div>
        <label for="title">Title:</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        {{-- ci sarebbe anche l'input image o url--}}
        <label for="thumb">Url Img:</label>
        <input type="text" name="thumb">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price">
    </div>
    <div>
        <label for="series">Series:</label>
        <input type="text" name="series">
    </div>
    <div>
        <label for="sale_date">Sale data:</label>
        <input type="data" name="sale_date">
    </div>
    <div>
        <label for="type">Type:</label>
        <input type="text" name="type">
    </div>

    <div>
        <input type="submit" value="Invia">
    </div>

</form>
@endsection
