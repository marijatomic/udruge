@extends('layouts.app')


@section('content')
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-primary mb-4">
                    <h4 class="card-header">{{$association->name}}</h4>
                    <div class="card-body">
                        <p class="card-text">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-calendar-day"></i> {{$association->year}}</li>
                            <li class="list-group-item"><i class="fa fa-envelope"></i> {{$association->email}}</li>
                            <li class="list-group-item"><i class="fa fa-mobile-alt"></i> {{$association->phone}}</li>
                            <li class="list-group-item"><i class="fa fa-university"></i><a
                                        href="../faculties/{{$association->faculty->id}}"> {{$association->faculty->name}}</a>
                            </li>
                            <li class="list-group-item"><i class="fa fa-align-left"></i> {{$association->description}}
                            </li>
                            <li class="list-group-item"><i
                                        class="fa fa-chalkboard-teacher"></i><a
                                        href="../users/{{$association->user->id}}"> {{$association->user->name}} {{$association->user->surname}}</a>
                            </li>
                            <li class="list-group-item">
                                <div class="accordion" id="accordionExample" data-toggle="collapse"
                                     data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div data-toggle="collapse" data-target="#collapseOne"
                                         aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-users"></i> Članovi <i
                                                class="fas fa-chevron-down text-muted"></i>
                                    </div>

                                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                @foreach($members as $member)
                                                    <li class="list-group"><a
                                                                href="../users/{{$member->user->id}}">{{$member->user->name}} {{$member->user->surname}} </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        @can('update',$association)
                                            <form method="get"
                                                  action="{{route('associations_edit')}}/{{$association->id}}">
                                                <button class="btn btn-primary btn-sm">Uredi</button>
                                            </form>
                                        @endcan
                                    </div>
                                    <div class="col-md-3">
                                        @can('delete',$association)
                                            <form method="get"
                                                  action="{{route('associations_delete')}}/{{$association->id}}">
                                                <button class="btn btn-danger btn-sm">Izbriši</button>
                                            </form>
                                        @endcan
                                    </div>
                                </div>
                            </li>
                            @can('addMemberAndActivity',$association)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <form method="get"
                                                  action="{{route('members_create')}}/{{$association->id}}">
                                                <button class="btn btn-success btn-sm">Dodaj članove</button>
                                            </form>
                                        </div>
                                        <div class="col-md-5">
                                            <form method="get"
                                                  action="{{route('activities_create')}}/{{$association->id}}">
                                                <button class="btn btn-dark btn-sm">Dodaj aktivnost</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @endcan
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div>
                    @foreach($activities as $activity)
                        <div class="card mb-3">
                            <h5 class="card-header"><a href="../activities/{{$activity->id}}">{{$activity->name}}</a></h5>
                            <div class="card-body">
                                <p class="card-text">{{$activity->description}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-muted"><i
                                            class="fa fa-calendar-day"></i> {{$activity->start_date}}</li>
                                <li class="list-group-item text-muted"><i
                                            class="fa fa-calendar-times"></i> {{$activity->end_date}}</li>
                            </ul>
                            <div class="card-footer text-muted">
                                <a href="{{$activity->association->id}}">{{$activity->association->name}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

@endsection