 @foreach ($homes as $home)
 {{-- @php
     dd($home)
 @endphp --}}
{{-- <home-loop-view class="col-md-4"  :home="{{ $home }}"  inline-template> --}}
<div class="card mx-2 my-2" style="max-width:300px">
    <div class="card-body">
        <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
        <h3><a href="{{ $home->url }}">{{ $home->title }}</a></h3>
                <p>Location: {{ $home->location }}</p>
                <p>No Rooms: {{ $home->no_rooms }}</p>
                <p class={{ $home->status }}>Price {{ $home->price }}</p>
                <p>Type: {{ $home->type }}</p>
                <p> Agent: <a href="{{ $home->url }}">{{ $home->user->name }}</a></p>
                <p> Date Posted: {{ $home->created_date }}</p>
                <p> Bids: {{ $home->bid_count  }}
                @if (Auth::user()->can('update-home', $home))
                <div class="ml-auto">
                    <a class="btn btn-outline-info" href="{{ route('homes.edit', $home->id) }}">Edit</a>
                </div>
                @endif
                {{-- @if (Auth::user()->can('update-home', $home)) --}}
                <div class="mr-auto">
                    <a class="btn btn-outline-info" href="{{ route('homes.show', $home->id) }}">View</a>
                </div>
                {{-- @endif --}}
                @if (Auth::user()->can('delete-home', $home))
                <form action="{{ route('homes.destroy', $home->id) }}" method="POST">   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                @endif
            </div> 
        </div>
{{-- </homes-loop-view> --}}
        @endforeach
        
        <div class="pagination col-md-12 mt-2" id="#pagination">
            {!! $homes->links() !!}
        </div>
        

