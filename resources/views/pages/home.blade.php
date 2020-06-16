@extends('layouts.app')

@section('title')
    NOMADS
    
@endsection

@section('content')
    
    
    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore the Beautiful World
            <br>
            As Easy On Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br>
            moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>


    <!-- Main -->
    <main>
        <!-- section stats details -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="class col-3 col-md-2 stats-details">
                    <h2>30K</h2>
                    <p>Members</p>
                </div>
                <div class="class col-3 col-md-2 stats-details">
                    <h2>20</h2>
                    <p>Countries</p>
                </div>
                <div class="class col-3 col-md-2 stats-details">
                    <h2>10K</h2>
                    <p>Hotels</p>
                </div>
                <div class="class col-3 col-md-2 stats-details">
                    <h2>25</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Section Wisata Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try <br>
                            before in this world</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Popular Content -->
        <section class="section-popular-content" id="popular-content">
            <div class="container">
                <div class="section-popular-travel row
                 justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular-1.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DERATAN, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular-2.jpg');">
                            <div class="travel-country">ITALY</div>
                            <div class="travel-location">MENARA PISSA</div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular-3.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">NUSA PENIDA</div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular-4.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BOROBUDUR</div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Network -->
        <section class="section-networks" id="networks" <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>Companies as trusted us <br>
                        more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/partner.png" alt="Logo Partner" class="img-partner">
                </div>
            </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They’re Loving US</h2>
                        <p>Moments were giving them <br>
                            the best experience</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Jim's Cloudy</h3>
                                <p class="testimonial">“It was glorious and I could
                                    not stop to say wohooo for
                                    every single moment
                                    Dankee”
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud,Bali, Indonesia
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-2.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Alexandra Jole</h3>
                                <p class="testimonial">“I loved it when the waves was shaking harder - I was scared too”
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Mnr Pissa,Roma, Italy
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonila-3.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Loren's Albert</h3>
                                <p class="testimonial">“The trip
                                    was amazing and I saw something beautiful in that island that makes
                                    me want to learn more”
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida, Indonesia
                            </p>
                        </div>
                    </div>



                </div>
                <div class="row">
                    <div class="col-12  text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help
                        </a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started
                        </a>
                    </div>
                </div>
        </section>

        <footer class="section-footer mt-5 mb-4 border-top">
            <div class="container pt-5 pb-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <h5>FEATURES</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Social Media Kit</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>ACCOUNT</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Refund</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Rewards</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>COMPANY</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Media</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>GET CONNECTED</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Tanjung Priuk, North Jakarta</a></li>
                                    <li><a href="#">Indonesia</a></li>
                                    <li><a href="#">0895-1439-7339</a></li>
                                    <li><a href="#">Support@nomads.co.id</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row border-top justify-content-center
                 align-items-center pt-4">
                    <div class="col-auto text-gray-500 font-weight-light">
                        2020 Copyright Nomads • All rights reserved • With Love From Pekalongan
                    </div>
                </div>
            </div>
        </footer>
    </main>

@endsection