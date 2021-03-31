@foreach ($bids as $bid)
    {{ $bid->current_bid }}
    <span>Bid {{ $bid->created_at }}</span>
    <div class="media">
        <img src="{{ $bid->user->avatar }}">
    </div>
    <div class="media-body">
        <a href="{{ $bid->user->url }}">{{ $bid->user->name }}</a>
    </div>
@endforeach
