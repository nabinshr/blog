<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>contact | @yield('title')</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
            @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
            @include('inc.showcase')
    <div class="row">
        <div class="col-md-8 col-lg-8">
    @yield('content')
    <div class="col-md-4 col-lg-4">
    @include('inc.sidebar')
    </div>
        </div>
    </div>
</div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>