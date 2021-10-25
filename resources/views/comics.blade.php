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
                
                {{-- <card v-for="(item, index) in CardDc" :key="index" :title="item.series" :source="item.thumb"/>
                <button class="btn" id="btn-comics">Load More</button> --}}

            </div>

        </div>
    </div>
@endsection