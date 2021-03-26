@extends('layouts.app')
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

                        <h1 class="col-md-12">Home for{{$Home->id}}<h2>
                            <div class="row col-md-12">
                                <p>{{$Home->location}}</p>
                                <p>{{$Home->no_rooms}}</p>
                                <p>{{$Home->price}}</p>
                                <p>{{$Home->types}}</p>
                            </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
