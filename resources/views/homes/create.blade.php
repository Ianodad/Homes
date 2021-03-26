@extends('layouts.app')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center text-center pt-8 sm:justify-start sm:pt-0">
                    <h1 class="header">ADD HOME</h1>
                </div>
                <div class="row">
                    <form action="/homes" method="POST">
                        @include("homes._form", ['buttonText' =>"Create A Home"] )
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
