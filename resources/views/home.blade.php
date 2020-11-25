@extends('layouts.app')

@section('content')
<section id="home">
    <div class="jumbotron reduce-top-margin">
        <h1 class="display-4">Travel & Discover</h1>
        <p class="lead reduce-top-margin">Villages In Bali to Explore</p>
    </div><!--jumbotron-->

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-4 reduce-top-margin">
                <h2 class="text-center">More Places To Explore</h2>
            </div><!--col-lg-4-->
            <div class="col-lg-8">
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div><!--col-lg-8-->
        </div><!--row-->

        <div data-aos="fade-down" class="carousel-home">
            <div class="card">
                <img src="/resources/images/bukit-tengah.jpg" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Bukit Tengah</b></h5>
                    <a href="#" class="reduce-top-margin">View More</a>
                </div><!--container-->
            </div><!--card-->

            <div class="card">
                <img src="/resources/images/tamblingan.jpg" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Tamblingan</b></h5>
                    <a href="#" class="reduce-top-margin">View More</a>
                </div><!--container-->
            </div><!--card-->

            <div class="card">
                <img src="/resources/images/kintamani.jpg" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Pinggan</b></h5>
                    <a href="#" class="reduce-top-margin">View More</a>
                </div><!--container-->
            </div><!--card-->

            <div class="card">
                <img src="/resources/images/mas-home.jpg" alt="Avatar" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Mas Village</b></h5>
                    <p class="reduce-top-margin">Ubud, Gianyar</p>
                    <a href="#" class="reduce-top-margin">View More</a>
                </div><!--container-->
            </div><!--card-->

            <div class="card">
                <img src="/resources/images/karangasem.jpg" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Penglipuran Tourism Village</b></h5>
                    <a href="#" class="reduce-top-margin">View More</a>
                </div><!--container-->
            </div><!--card-->

            <div class="card">
                <img src="/resources/images/payangan.jpg" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Payangan</b></h5>
                    <a href="#" class="reduce-top-margin">View More</a>
                </div><!--container-->
            </div><!--card-->

            <div class="card">
                <img src="/resources/images/trunyan.jpg" style="width:100%">
                <div class="container reduce-top-margin">
                    <h5><b>Kintamani</b></h5>
                    <a href="#" class="reduce-top-margin">View More</a>
                </div><!--container-->
            </div><!--card-->

        </div><!--carousel-->
    </div><!--container-->

    <div class="support-locals-banner mt-5">
        <div class="black-layer">
            <div class="container">
                <h1 class="display-4">MAINTANED BY THE LOCALS</h1>
                <p class="lead reduce-top-margin text-center">Some of this villages are developed and maintained by the locals, Your visit will have a generous impact for the local people</p>
            </div><!--container-->
        </div><!--black layer-->
    </div><!--end support locals-->

    <div class="row">
        <div class="col-lg-12">
            <div class="container">

            </div><!--container-->
        </div><!--col-12-->
    </div><!--row-->
</section>
@endsection
