@extends('layouts.app')
@section('content')
    <div class="container-fluid mx-auto">
        <div class="row d-flex my-4">
            <div class="col-md-5 col-lg-6 card">
                <img src="http://via.placeholder.com/640x360" alt="image" />
            </div>
            <div class="col-md-5 col-lg-5 card px-4 py-2">
                <h1 class="display-4">{{ Str::words($Home->title, 3) }}<h2>
                <h1 class="float-right">Set Bid</h1>    
                <i class="far fa-user"></i>
                <h3>{{ $Home->bid_count . ' ' . Str::plural('Bid', $Home->bid_count) }}</h3>
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc"
                            role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="nav-detail-tab" data-toggle="tab" href="#nav-detail"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Details</a>
                        <a class="nav-item nav-link" id="nav-bids-tab" data-toggle="tab" href="#nav-bids" role="tab"
                            aria-controls="nav-bids" aria-selected="false">Bids</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-desc" role="tabpanel"
                        aria-labelledby="nav-desc-tab">
                        {{ $Home->description }}
                    </div>
                    <div class="tab-pane fade" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                        <div class="details">
                            <p>Location: {{ $Home->location }}</p>
                            <p>Rooms: {{ $Home->no_rooms }}</p>
                            <p>Price: {{ $Home->price }}</p>
                            <p>Type: {{ $Home->types }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-bids" role="tabpanel" aria-labelledby="nav-bids-tab">
                        {{-- <i title="fas fa-caret-up"></i> --}}
                        {{-- <i class="far fa-user"></i>
                        @include('bids._index',[
                            'bids'=>$Home->bid
                        ]) --}}
                        @foreach ($Home->bid as $bi)
                        <bid-detail-view :bid="{{ $bi }}"></bid-detail-view>
                            {{-- {{ $bi->current_bid }}
                            <span>Bid {{ $bi->created_at }}</span>
                            <div class="media">
                                <img src="{{ $bi->user->avatar }}">
                            </div>
                            <div class="media-body">
                                <a href="{{ $bi->user->url }}">{{ $bi->user->name }}</a>
                            </div> --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
