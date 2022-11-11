<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script> --}}
    <title>Laravel-base-crud</title>
</head>

<body>
    @yield('index')

    @yield('show')
    @yield('create')
    @yield('edit')
    {{-- @include('partials.header')
    @include('partials.main')
    @include('partials.footer') --}}

</body>

</html>
<script>
    const deleteButton = document.getElementById("deleteButton");
    deleteButton.addEventListener("click", function(){
        const confirm = window.confirm("Are you sure?");
        if(confirm){
            const form = document.getElementById("deleteForm");
            form.submit();
        }
    });
</script>
