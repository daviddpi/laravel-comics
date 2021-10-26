@extends('layout.main')

@section('title', 'Comic')
    
@section("contenuto")
    <div id="single-comic">
        <div class="bg-comics"></div>
        <div class="wrapper">

            {{-- titolo e descrizione prodotto --}}
            <div class="container-detail">
                <div class="info-comic">
                    <h2>Action Comics #1000: the deluxe edition</h2>

                    {{-- prezzo e disponibilità del prodotto --}}
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

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dicta magni distinctio fuga omnis. Ullam odio doloribus harum veritatis natus enim voluptate esse, reprehenderit perferendis minima atque in sit recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptas totam ipsum sit nostrum atque iusto nobis ducimus ex voluptatibus, ab, vero dolorum deserunt qui quod repellat consequuntur quaerat amet.
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quibusdam nobis. Delectus, obcaecati quibusdam? Nihil corrupti quam exercitationem recusandae similique praesentium accusantium facilis culpa eius nesciunt sit, doloribus officia. Veritatis.</p>
                        </div>
                        <div class="d-flex inner-specs">
                            <h4>written by:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quibusdam nobis. Delectus, obcaecati quibusdam? Nihil corrupti quam exercitationem recusandae similique praesentium accusantium facilis culpa eius nesciunt sit, doloribus officia. Veritatis.</p>
                        </div>
                    </div>
    
                    <div class="specs">
                        <h2>Specs</h2>
                        <div class="d-flex inner-specs">
                            <h4>Series:</h4>
                            <p>Action comics</p>
                        </div>
                        <div class="d-flex inner-specs">
                            <h4>Us Price:</h4>
                            <p>Action comics</p>
                        </div>
                        <div class="d-flex inner-specs">
                            <h4>On sale dates:</h4>
                            <p>Action comics</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection