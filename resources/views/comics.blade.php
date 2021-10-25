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
                    <img src={{ $comic["thumb"] }} alt="{{ $comic["title"] }}">
                    <h5>{{ $comic["title"] }}</h5>
                </div>
                @endforeach

                <button class="btn" id="btn-comics">Load More</button>

            </div>

        </div>
    </div>
@endsection