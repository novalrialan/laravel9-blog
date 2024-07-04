<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
</head>

<body>
    {{-- start header --}}
    @include('layout.header')
    {{-- end header --}}
    <div class="container">

        @yield('content')


        {{-- footer start --}}
        @include('layout.footer')
        {{-- footer end --}}
    </div>

</body>

</html>
