@extends('layouts.main')
@section('content')

<div style="height: 120px; background-color: #202020"> 

</div>
<div class="container-fluid" style="padding-top: 30px"> 
    <div class="container" style="width: 650px"> 
        <div class="position-relative p-5 overlay-top overlay-bottom" style="background: #202020"> 
            {{-- <div class="position-relative p-4" style="background: url(img/forma.jpg) !important; background-size: cover !important;">  --}}
            <h2 style="color: white"> Ime i prezime: {{ $registration->name_surname }}</h1>
            <h2 style="color: white"> Email: {{ $registration->email }}</h1>
            <h2 style="color: white"> Broj telefona: {{ $registration->phone }}</h1>
            <h2 style="color: white"> Adresa: {{ $registration->address }}</h1>
            <h2 style="color: white"> Kurs: {{ $registration->course->name }}</h1>
            <h2 style="color: white"> Status: </h2>
            <form method="post" action="{{ route('change-status', ['id'=>$registration->id]) }}"> 
                @csrf
                <div class="form-group"> 
                    <select class=" bg-transparent border-primary px-4" name="status" style="padding: 15px; color: white"> 
                        <option value="-1" style="color: black"> Odbijena</option>
                        <option value="0" style="color: black"> Kreirana</option>
                        <option value="1" style="color: black"> Prihvaćena</option>
                    </select>
                </div>
                <button class="btn btn-primary btn-block font-weight-bold py-2" style="width: 160px"> Promeni status</button>
            </form>
        </div>
    </div>
</div>

@endsection