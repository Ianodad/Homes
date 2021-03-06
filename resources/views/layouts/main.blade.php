<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div id="app">
        @yield('content')
        <footer>
            Copyright 2020 Grid Project
        </footer>
    </div>
</body>

<script type="text/javascript">


    $(document).ready(function(){
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            console.log(page)
            fetch_more_homes(page)
        });

        function fetch_more_homes(page){
            $.ajax({
                type: 'GET',
                url:'?page=' + page,
                success: function(data){
                    $('#homes_loop').html(data);
                }
            })
        }
    })

</script>
</html>

