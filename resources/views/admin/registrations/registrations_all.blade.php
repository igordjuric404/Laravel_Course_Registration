@extends('layouts.main')
@section('content')

<div style="height: 120px; background-color: #202020">

</div>
<div class="container-fluid" style="padding-top: 30px">
    <div class="container-fluid">
        <div class=" position-relative ">
            <table style="vertical-align:middle; width: 100%">
                <tr>
                    @foreach ($courses_all as $course)
                        <td style="vertical-align:middle; width: 25%">
                            <a class="btn btn-primary btn-block font-weight-bold py-1" type="submit" href="{{ route('registration-sort-course', [ 'course_id' => $course->id ]) }}">{{$course->name}}</a>
                        </td>
                    @endforeach
                </tr>
            </table>
            <br>
            <table style="vertical-align:middle; width: 100%">
                <tr>
                    @for ($i = -1; $i <= 1; $i++)
                        <td style="vertical-align:middle; width: 33%">
                            <a class="btn btn-primary btn-block font-weight-bold py-1" type="submit" href="{{ route('registration-sort-status', [ 'status' => $i ]) }}">
                                @if( $i == -1)
                                    Status: Odbijena
                                @elseif($i == 0)
                                    Status: Kreirana
                                @else
                                    Status: Prihvacena
                                @endif
                            </a>
                        </td>
                    @endfor
                </tr>
            </table>
            <br>
            <table class="table" style="background-color: #202020; color: #ffffff">
                <thead>
                    <tr>
                        <th>Ime i prezime</th>
                        <th>Email</th>
                        <th>Broj telefona</th>
                        <th>Adresa</th>
                        <th>Datum</th>
                        <th>Kurs</th>
                        <th colspan="2" style="text-align: center">Promena statusa</th>
                        <th>Brisanje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registrations_all as $registration)
                        <tr>
                            <td style="vertical-align:middle">{{$registration->name_surname}}</td>
                            <td style="vertical-align:middle">{{$registration->email}}</td>
                            <td style="vertical-align:middle">{{$registration->phone}}</td>
                            <td style="vertical-align:middle">{{$registration->address}}</td>
                            <td style="vertical-align:middle">{{$registration->date}}</td>
                            <td style="vertical-align:middle">{{$registration->course->name}}</td>
                            <td style="vertical-align:middle">
                                @if($registration->status==0)
                                    <span class="label label-warning" >
                                        Kreirana
                                    </span>
                                @elseif($registration->status==-1)
                                    <span class="label label-danger">
                                        Odbijena
                                    </span>
                                @else
                                    <span class="label label-success">
                                        Prihvaćena
                                    </span>
                                @endif
                            </td>
                            <td style="vertical-align:middle">
                                <a class="btn btn-primary btn-block font-weight-bold py-1" type="submit" href="{{ route('registration-single', [ 'id' => $registration->id ]) }}">Promena</a>
                            </td>
                            <td style="vertical-align:middle">
                                <a class="btn btn-primary btn-block font-weight-bold py-1" type="submit" href="{{ route('registration-delete', [ 'id' => $registration->id ]) }}">Obriši</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection