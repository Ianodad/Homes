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
                        @foreach ($homes as $home)
                            <div class="card max-w-6xl mx-auto sm:px-6 lg:px-8">
                                <h3><a href="{{ $home->url }}">{{ $home->title }}</a></h3>
                               <p>{{$home->location}}</p>
                               <p>{{$home->no_rooms}}</p>
                               <p>{{$home->price}}</p>
                               <p>{{$home->types}}</p>
                               <p> Agent <a href="{{ $home->url }}">{{ $home->user->name }}</a></p>
                                <p>{{ $home->created_at }}</p>
                            </div>
                        
                        @endforeach
                        
                        {{ $homes->links() }}
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection 
