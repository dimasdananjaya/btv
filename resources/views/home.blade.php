@extends('layouts.app')

@section('content')
<section id="home">
    <div class="jumbotron reduce-top-margin">
        <h1 class="display-4">Travel & Discover</h1>
        <p class="lead reduce-top-margin">Villages In Bali to Explore</p>
    </div><!--jumbotron-->

    <div class="container">
        <div class="row mt-2 mb-3">
            <div class="col-lg-4 reduce-top-margin">
                <h2 class="text-center">More Places To Explore</h2>
            </div><!--col-lg-4-->
            <div class="col-lg-8">
                <p>We share our experience traveling around villages in Bali worthy visiting</p>
            </div><!--col-lg-8-->
        </div><!--row-->

        <div data-aos="fade-down" class="carousel-home">
            <div class="card">
                <img src="/resources/images/mas-home.jpg" alt="Avatar" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Mas Village</b></h5>
                    <p class="reduce-top-margin">Ubud, Gianyar</p>
                </div><!--container-->
            </div><!--card-->

            <div class="card">
                <img src="/resources/images/karangasem.jpg" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Penglipuran Tourism Village</b></h5>
                    <p class="reduce-top-margin">Bangli</p>
                </div><!--container-->
            </div><!--card-->

            <div class="card">
                <img src="/resources/images/payangan.jpg" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Payangan</b></h5>
                    <p class="reduce-top-margin">Gianyar</p>
                </div><!--container-->
            </div><!--card-->

            <div class="card">
                <img src="/resources/images/trunyan.jpg" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Penglipuran Tourism Village</b></h5>
                    <p class="reduce-top-margin">Bangli</p>
                </div><!--container-->
            </div><!--card-->

        </div><!--carousel-->
    </div><!--container-->
</section>
@endsection
