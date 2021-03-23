
    @foreach ($homes as $home)
        <div class="card mx-2 my-2" style="width:300px">
            <div class="card-body">
                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
                <h3><a href="{{ $home->url }}">{{ $home->title }}</a></h3>
                <p>Location: {{ $home->location }}</p>
                <p>No Rooms: {{ $home->no_rooms }}</p>
                <p class={{ $home->status }}>Price {{ $home->price }}</p>
                <p>Type: {{ $home->type }}</p>
                <p> Agent: <a href="{{ $home->url }}">{{ $home->user->name }}</a></p>
                <p> Date Posted: {{ $home->created_at }}</p>
            </div>
        </div>

    @endforeach

    <div class="pagination col-md-12 mt-2" id="#pagination">
        {!! $homes->links() !!}
    </div>


