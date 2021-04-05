<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>


<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com"/>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"/>
<title>Laravel</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}


<!-- Styles -->
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
<script src="{{ mix('js/app.js') }}"></script>

{{-- <script src="{{ asset(mix('css/app.css')) }}"></script> --}}

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }

</style>