<h1>Listings</h1>
<ul>
    @foreach ($listings as $listing)
        <li>
            <h2>
                <a href="/listings/{{$listing['id']}}">
                {{ $listing['title'] }}
                </a>
            </h2>
            <p>{{ $listing['description'] }}</p>
            <p>Price: ${{ $listing['price'] }}</p>
        </li>
    @endforeach
</ul>