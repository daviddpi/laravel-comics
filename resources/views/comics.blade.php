@extends('layout.main')

@section('title', 'Comics')
    
@section("contenuto")
    <div id="comics">
        <div class="bg-comics"></div>
        <div class="bg-container-comics">
            
            <div class="container-comics">

                <div class="title-comics">
                    <h3>Current Series</h3>
                </div>
                
                @foreach($comics_links as $comic)
                <div class="card-comics">
                    {{-- <a href='{{ route("single_comic", "id") }}''> --}}
                        <img src={{ $comic["thumb"] }} alt="{{ $comic["title"] }}">
                        <h5>{{ $comic["title"] }}</h5>
                    {{-- </a> --}}
                </div>
                @endforeach

                <button class="btn" id="btn-comics">Load More</button>

            </div>

        </div>
    </div>
@endsection