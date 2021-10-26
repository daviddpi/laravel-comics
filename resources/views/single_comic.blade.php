@extends('layout.main')

@section('title', 'Comic')
    
@section("contenuto")
    <div id="single-comic">
        <div class="bg-comics"></div>
        <div class="wrapper">
            <div class="container-detail">
                <div class="info-comic">
                    <h2>Action Comics #1000: the deluxe edition</h2>
                    <div class="price-container">
                        <div class="price-available">
                            <div class="price">
                                U.S. Price <span class="cost">$19.99</span>
                            </div>
                            <div class="available">
                                Available
                            </div>
                        </div>
                        <div class="check-available">
                            Check Avaliability &dtrif;
                        </div>
                    </div>
                </div>
                <figure>
                    <img src="{{ asset('images/add.jpg') }}" alt="adv Image">
                </figure>
            </div>
        </div>
    </div>
@endsection