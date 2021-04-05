@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="">
            {{-- <div class="">
                <p>Username</p>
                @php
                    $name = 'ian';
                    echo $name;
                @endphp
            </div> --}}
            <div class="">
            </div>
            <div class="col-md-12">
                <div class="container">
                    <div class="row header my-4">
                        <div class="">
                            <h1>THE BEST HOMES<h2>
                        </div>
                        <div class="ml-auto">
                            <a href="{{ route('homes.create') }}" class="">Add Your House</a>
                            <user-info></user-info>
                        </div>
                    </div>
                    <div class="d-flex row" id="homes_loop">
                        
                        @include('homes.homes_loop')

                        {{-- <div class="pagination col-md-12 mt-2" id="#pagination">
                            {!!  $homes->links()  !!}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
