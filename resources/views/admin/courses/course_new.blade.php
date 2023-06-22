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
                        <h1 class="text-white mb-4 mt-5 ">Dodaj novi kurs</h1>
                        <form class="col-lg-6  offset-lg-3" method="POST" action="{{route('course-send-form')}}">
                            @csrf
                            <div class="form-group">
                                <input name="name" type="text" class="form-control bg-transparent border-primary p-4" placeholder="Naziv kursa"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input name="max_number_of_applicants" type="number" class="form-control bg-transparent border-primary p-4" placeholder="Maksimalan broj polaznika"
                                    required="required" />
                            </div>
                            <textarea name="description" id="" cols="52" rows="5" placeholder="Opis" class="form-control bg-transparent border-primary p-4"></textarea>
                            <br>
                            <div>
                                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Kreiraj novi kurs</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection