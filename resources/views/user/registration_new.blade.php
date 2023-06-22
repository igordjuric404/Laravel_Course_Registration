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
                        <h1 class="text-white mb-4 mt-5 ">Rezerviši svoje mesto</h1>
                        <form class="col-lg-6  offset-lg-3" method="POST" action="{{route('registration-send-form')}}">
                            @csrf
                            <div class="form-group">
                                <input name="name_surname" type="text" class="form-control bg-transparent border-primary p-4" placeholder="Ime i prezime"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input name="phone" type="tel" class="form-control bg-transparent border-primary p-4" placeholder="Kontakt telefon"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input name="address" type="text" class="form-control bg-transparent border-primary p-4" placeholder="Adresa"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="date" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Datum" data-target="#date" data-toggle="datetimepicker"/>
                                </div>
                            </div>        
                            <div class="form-group">
                                <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;" name='course_id'>
                                    <option value="" disabled selected>Kurs</option>
                                    <option value="1">Škola fotografije</option>
                                    <option value="2">Škola analogne fotografije</option>
                                    <option value="3">Profesionalno usavršavanje</option>
                                    <option value="4">Časovi razvijanja filma</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Rezerviši</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection