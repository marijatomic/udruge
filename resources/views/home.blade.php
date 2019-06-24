@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <img src="images/home5.png" style="border-style:solid; border-width: thin; border-color:#1d68a7;">
    </div>
    <div class="container-fluid">

        <br>
        <div class="row justify-content-center">

            <div class="row col-md-10">
                @foreach($activities as $activity)
                    <div class="col-md-4">
                        <div class="card border-primary mb-4" style="height:400px;">
                            <h4 class="card-header"><a
                                        href="activities/{{$activity->id}}">{{ \Illuminate\Support\Str::words($activity->name, 6,'....')  }}</a>
                            </h4>
                            <div class="card-body">
                                <p class="card-text"> {{ \Illuminate\Support\Str::words($activity->description, 45,'....')  }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-muted"><i
                                            class="fa fa-calendar-day"></i> {{$activity->start_date}}</li>
                                <li class="list-group-item text-muted"><i
                                            class="fa fa-calendar-times"></i> {{$activity->end_date}}</li>
                            </ul>
                            <div class="card-footer text-muted">
                                <a href="associations/{{$activity->association->id}}">{{$activity->association->name}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-md-3">
            <a href="{{route('activities')}}"><p>Sve aktivnosti <i class="fas fa-angle-double-right"></i></p></a>
        </div>
    </div>
    <br>
    <div style="background-color: #1d68a7">
        <br>
        <div class="row justify-content-center col-md-12">
            <div class="col-md-2" style="color:whitesmoke; text-align: center;">
                <h3>O NAMA</h3>
                <hr style="border-color:whitesmoke;">
            </div>
        </div>
        <div class="row justify-content-center col-md-12">
            <div class="col-md-8" style="color:whitesmoke;">
                <p>Studentski zbor SUM najviše je predstavničko tijelo studenata Sveučilišta u Mostaru.</p>
                <p>Studentske udruge i skupine studenata realiziraju najviše projekata na Sveučilištu u Mostaru zbog
                    čega upravo najviše financijskih sredstava Studentski zbor preusmjeri na studentske udruge.
                    Najaktivniji studenti su najčešće uključeni u Studentski zbor ili neku od studentskih udruga na
                    Sveučilištu.</p>
            </div>
        </div>
        <br>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center col-md-12">
            <div class="col-md-2" style="text-align: center;">
                <i class="fas fa-user-graduate fa-4x" style="color:#1d68a7;"></i>
            </div>
            <div class="col-md-6" style="text-align: center;">
                <i class="fas fa-users fa-4x" style="color:#1d68a7;"></i>
            </div>
            <div class="col-md-2" style="text-align: center;">
                <i class="fas fa-tasks fa-4x" style="color:#1d68a7;"></i>
            </div>

        </div>
        <br>
        <div class="row justify-content-center col-md-12">
            <div class="col-md-2" style="text-align: center;">
                <h5 style="font-family: Calibri; color:#1d68a7;">11 000 studenata</h5>
            </div>
            <div class="col-md-6" style="text-align: center;">
                <h5 style="font-family: Calibri; color:#1d68a7;">30+ udruga</h5>
            </div>
            <div class="col-md-2" style="text-align: center;">
                <h5 style="font-family: Calibri; color:#1d68a7;">70+ projekata</h5>
            </div>

        </div>
        <br>
    </div>



@endsection