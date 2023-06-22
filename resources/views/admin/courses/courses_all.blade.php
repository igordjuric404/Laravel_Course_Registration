@extends('layouts.main')
@section('content')

<div style="height: 120px; background-color: #202020">

</div>
<div class="container-fluid" style="padding-top: 30px">
    <div class="container-fluid">
        <div class=" position-relative ">
            <br>
            <table class="table" style="background-color: #202020; color: #ffffff">
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Broj učesnika</th>
                        <th>Maksimalan broj učesnika</th>
                        <th>Broj slobodnih mesta</th>
                        <th>Opis</th>
                        <th>Izmena</th>
                        <th>Brisanje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td style="vertical-align:middle">{{$course->name}}</td>
                            <td style="vertical-align:middle">{{$course->number_of_applicants}}</td>
                            <td style="vertical-align:middle">{{$course->max_number_of_applicants}}</td>
                            <td style="vertical-align:middle">{{($course->max_number_of_applicants) - ($course->number_of_applicants)}}</td>
                            <td style="vertical-align:middle">{{$course->description}}</td>

                            <td style="vertical-align:middle">
                                <a class="btn btn-primary btn-block font-weight-bold py-1" type="submit" href="{{ route('course-single', [ 'id' => $course->id ]) }}">Izmeni kurs</a>
                            </td>
                            <td style="vertical-align:middle">
                                <a class="btn btn-primary btn-block font-weight-bold py-1" type="submit" href="{{ route('course-delete', [ 'id' => $course->id ]) }}">Obriši kurs</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection