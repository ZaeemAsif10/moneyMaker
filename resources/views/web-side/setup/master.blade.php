<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Maker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/theme.css') }}">
</head>

<body>


    @include('web-side.setup.header')
    @yield('content')
    @include('web-side.setup.footer')



    <script src="{{ asset('public/assets/js/jquery.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('public/assets/js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('public/js/main.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('public/assets/js/osmanli_calendar.js') }}" crossorigin="anonymous"></script>


    @yield('scripts')

</body>

</html>
