@extends('layouts.main')
@section('content')

<div style="height: 120px; background-color: #202020">

</div>
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase display-4" style="letter-spacing: 5px;">Naše usluge</h4>
        </div>
        <div class="row">
            @foreach ($courses as $course)
            <div class="row align-items-center col-lg-6 offset-lg-3" style="border: thin solid #DA9F5B; border-radius: 20px">
                <div class="col-lg-12 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <br>
                            <h4>{{$course->name}}</h4>
                            <p class="m-0">{{$course->description}}</p>
                            <p style="color: red; padding-top: 10px ">Preostalo mesta: {{($course->max_number_of_applicants) - ($course->number_of_applicants)}}</p> 
                            <div style="">
                                <a class="btn btn-primary btn-block font-weight-bold py-1"  type="submit" href="{{ route('registration-id-input-form', [ 'id' => $course->id ]) }}">Registruj se</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <br>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection