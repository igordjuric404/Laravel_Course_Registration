@extends('layouts.main')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Najbolji način da naučite fotografiju</h2>
                        <h1 class="display-1 text-white m-0">Škola fotografije</h1>
                    </div>
                </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase display-4" style="letter-spacing: 5px;">O nama</h4>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Naša priča</h1>
                    <h5 class="mb-3">Proslavljajući trenutke kroz objektiv, naša strast prema fotografiji zapalila je putovanje koje danas oblikuje nadarene umetnike širom Srbije.
                    </h5>
                    <p>Naša škola fotografije predstavlja kreativno utočište, gde se susreću entuzijasti i stručnjaci. Podstičemo istraživanje, razmenu ideja i neprekidno usavršavanje, dok naša zajednica otkriva lepotu i moć vizuelne priče. Dobrodošli u inspirativni svet fotografije!</p>
                    <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Pročitaj još</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Naša vizija</h1>
                    <p>Kroz objektive beležimo svet i inspirišemo kreativne vizije, težimo da razvijemo narednu generaciju vizionarskih fotografa.</p>
                    <p>Bilo da ste:</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Početnik</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Hobista</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Profesionalac</h5>
                    <p>Naša škola je tu da vas nauči nesto novo!</p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

        <!-- Offer Start -->
        <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom" style="background-image: url(img/carousel-1.jpg)">
            <div class="container py-5">
                <h1 class="display-3 text-primary mt-3">30% POPUSTA</h1>
                <h1 class="text-white mb-3">Letnja akcija</h1>
                <h4 class="text-white font-weight-normal mb-4 pb-3">Samo do 30. juna!</h4>
                <form class="form-inline justify-content-center mb-4">
                    <div class="input-group">
                            <a class="btn btn-primary font-weight-bold px-4" type="submit" style="height: 40px; vertical-align: middle" href="{{route('registration-input-form')}}">Prijavi se</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Offer End -->

    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase display-4" style="letter-spacing: 5px;">Naše usluge</h4>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4>Škola fotografije</h4>
                            <p class="m-0">Otkrijte svoj fotografski potencijal kroz naše časove prilagođene početnicima, koji će vam omogućiti da sa samopouzdanjem fotografišete.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpeg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4>Škola analogne fotografije</h4>
                            <p class="m-0">Naušite večnu umetnost analogne fotografije uz naše časove vođene stručnjacima, gde ćete naučiti da stvarate zanosne slike pomoću filma.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4>Profesionalno usavršavanje</h4>
                            <p class="m-0">Unapredite svoje veštine i krenite na put profesionalnog usavršavanja uz naše specijalizovane obuke, namenjene iskusnijim fotografima.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4>Časovi razvijanja filma</h4>
                            <p class="m-0">Otkrijte umetnost razvijanja analogne fotografije na našim časovima, gde ćete naučiti detalje tamne komore i oživeti svoje slike.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    
@endsection