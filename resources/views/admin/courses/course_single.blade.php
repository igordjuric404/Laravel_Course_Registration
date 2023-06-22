@extends('layouts.main')
@section('content')

<div style="height: 120px; background-color: #202020"> 

</div>
<div class="container-fluid" style="padding-top: 30px"> 
    <div class="container" style="width: 650px"> 
        <div class="position-relative p-5 overlay-top overlay-bottom" style="background: #202020"> 
            {{-- <div class="position-relative p-4" style="background: url(img/forma.jpg) !important; background-size: cover !important;">  --}}
            <form class="col-lg-12 " method="POST" action="{{route('course-change-status', ['id' => $course->id])}}">
                @csrf
                <div class="form-group">
                    <h4 style="color: white"> Naziv kursa:</h4>
                    <input name="name" type="text" value="{{ $course->name }}" class="form-control bg-transparent border-primary p-4" placeholder="Naziv kursa" style="color: white" required="required" />
                </div>
                <div class="form-group">
                    <h4 style="color: white"> Broj polaznika:</h4>
                    <input name="number_of_applicants" type="number" value="{{ $course->number_of_applicants }}" class="form-control bg-transparent border-primary p-4" style="color: white" placeholder="Maksimalan broj polaznika" required="required" />
                </div>
                <div class="form-group">
                    <h4 style="color: white"> Maksimalan broj polaznika:</h4>
                    <input name="max_number_of_applicants" type="number" value="{{ $course->max_number_of_applicants }}" class="form-control bg-transparent border-primary p-4" style="color: white" placeholder="Maksimalan broj polaznika" required="required" />
                </div>
                <div class="form-group">
                    <h4 style="color: white"> Opis:</h4>
                    <textarea name="description"  id="" cols="52" rows="5" placeholder="Opis" class="form-control bg-transparent border-primary p-4" style="color: white" required="required">{{ $course->description }}</textarea>
                </div>
                <div>
                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Izmeni kurs</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection