<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        <main>
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
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
