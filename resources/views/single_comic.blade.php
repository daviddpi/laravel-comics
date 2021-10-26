@extends('layout.main')

@section('title', 'Comic')
    
@section("contenuto")
    <div id="single-comic">
        <div class="bg-comics"></div>
        <div class="wrapper">

            {{-- titolo e descrizione prodotto --}}
            <div class="container-detail">
                <div class="info-comic">
                    <h2>{{$single_comic["title"]}}</h2>
                    <div class="image-comic">
                        <img src="{{ asset($single_comic["thumb"]) }}" alt="adv Image">
                    </div>
                    {{-- prezzo e disponibilità del prodotto --}}
                    <div class="price-container">
                        <div class="price-available">
                            <div class="price">
                                U.S. Price <span class="cost">{{ $single_comic["price"] }}</span>
                            </div>
                            <div class="available">
                                Available
                            </div>
                        </div>
                        <div class="check-available">
                            Check Avaliability &dtrif;
                        </div>
                    </div>

                    <p>
                        {{$single_comic["description"]}}
                    </p>
                </div>
                <figure>
                    <img src="{{ asset('images/add.jpg') }}" alt="adv Image">
                </figure>
            </div>

        </div>
        <div class="bg-specs-comic">
            {{-- specifiche prodotto --}}
            <div class="wrapper">
                <div class="d-flex">
                    <div class="talent">
                        <h2>Talent</h2>
                        <div class="d-flex inner-specs">
                            <h4>Art by:</h4>
                            <p>
                                @foreach ($single_comic["artists"] as $comic)
                                    {{ $comic }}                                        
                                @endforeach
                    
                            </p>
                        </div>
                        <div class="d-flex inner-specs">
                            <h4>written by:</h4>
                            <p>
                                @foreach ($single_comic["writers"] as $comic)
                                    {{ $comic }}                                        
                                @endforeach
                    
                            </p>
                        </div>
                    </div>
    
                    <div class="specs">
                        <h2>Specs</h2>
                        <div class="d-flex inner-specs">
                            <h4>Series:</h4>
                            <p>{{ $single_comic["series"] }}</p>
                        </div>
                        <div class="d-flex inner-specs">
                            <h4>Us Price:</h4>
                            <p>{{ $single_comic["price"] }}</p>
                        </div>
                        <div class="d-flex inner-specs">
                            <h4>On sale dates:</h4>
                            <p>{{ $single_comic["sale_date"] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
