@extends('comics.layouts.layout')


@section('create')
<form method="POST" action="{{ route('comics.store') }}">
    @csrf

    <div>
        <label for="title">Title:</label>
        <input required type="text" name="title">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        {{-- ci sarebbe anche l'input image o url--}}
        <label for="thumb">Url Img:</label>
        <input required type="text" name="thumb">
    </div>
    <div>
        <label for="price">Price:</label>
        <input required type="number" step=".01" name="price">
    </div>
    <div>
        <label for="series">Series:</label>
        <input required type="text" name="series">
    </div>
    <div @error('sale_date') class="is-invalid" @enderror>
        <label for="sale_date">Sale data:</label>
        <input required type="date" name="sale_date">
        @error('sale_date') <span>
            Non puoi mettere una data precedente a oggi</span> @enderror
    </div>
    <div>
        <label for="type">Type:</label>
        <input required type="text" name="type">
    </div>

    <div>
        <input required type="submit" value="Invia">
    </div>

</form>
@endsection
