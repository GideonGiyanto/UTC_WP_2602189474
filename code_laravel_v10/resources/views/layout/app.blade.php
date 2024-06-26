<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>
<body>
@include('components.navbar')

<div class="container-fluid">
    @yield('content')
</div>

@include('components.footer')
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
