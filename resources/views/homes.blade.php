@extends('layouts.main')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <p>Username</p>
                @php
                    $name = 'ian';
                    echo $name;
                @endphp
            </div>
            <div>
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <h1>THE BEST HOMES<h2>
                    </div>
                    <div class="row">
                        @for ($i = 0; $i < count($homes); $i++)
                            <div class="card max-w-6xl mx-auto sm:px-6 lg:px-8">
                                <p>Location {{ $homes[$i]['location'] }}</p>
                                <p> Type {{ $homes[$i]['type'] }}</p>
                                <p> Rooms {{ $homes[$i]['rooms'] }}</p>
                                <p> Square foot {{ $homes[$i]['sqft'] }}</p>
                                <p> price {{ $homes[$i]['price'] }}</p>
                                @if ($homes[$i]['price'] > 1000000)
                                    <p>You must be a millionaire to buy this house</p>
                                @elseif($homes[$i]['price'] < 1000000) 
                                    <p>You can afford this house</p>
                                @else
                                        <p>Maybe</p>
                                @endif

                                @unless($homes[$i]['type'] == 'mansions')
                                    <p>This is for big boys</p>
                                @endunless
                            </div>
                        @endfor
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection 
