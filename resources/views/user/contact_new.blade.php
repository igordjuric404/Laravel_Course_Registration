@extends('layouts.main')
@section('content')
<div style="height: 120px; background-color: #202020">

</div>
<div class="container-fluid" style="padding-top: 30px">
    <div class="container">
        <div class="reservation position-relative overlay-top overlay-bottom">
            <div class="row align-items-center" style="background-image: url(img/forma.jpg); background-size: cover;" ">
                <div class="col-lg-12 justify-content-center" style="padding: 0; background: rgba(0, 0, 0, 0.6);">
                    <div class="text-center p-5" >
                        <h1 class="text-white mb-4 mt-5 ">Kontaktirajte nas</h1>
                        <form class="col-lg-6  offset-lg-3" method="POST" action="{{route('contact-send-form')}}">
                            @csrf
                            <div class="form-group">
                                <input name="name_surname" type="text" class="form-control bg-transparent border-primary p-4" placeholder="Ime i prezime"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                    required="required" />
                            </div>
                            <textarea name="comment" id="" cols="52" rows="5" placeholder="Komentar" class="form-control bg-transparent border-primary p-4"></textarea>
                            <br>
                            <div>
                                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Pošalji</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection