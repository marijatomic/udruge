@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card border-primary mb-3">
                    <div class="card-header"> {{$activity->name}}</div>
                    <div class="card-body">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-calendar-day"></i> {{$activity->start_date}}
                            </li>
                            <li class="list-group-item"><i class="fa fa-calendar-check"></i> {{$activity->end_date}}
                            </li>
                            <li class="list-group-item"><i class="fa fa-graduation-cap"></i><a
                                        href="../associations/{{$activity->association->id}}"> {{$activity->association->name}}</a>
                            </li>
                            <li class="list-group-item"><i class="fa fa-university"></i><a
                                        href="../faculties/{{$activity->association->faculty->id}}"> {{$activity->association->faculty->name}}</a>
                            </li>
                            <li class="list-group-item"><i class="fa fa-align-left"></i> {{$activity->description}}</li>
                            <li class="list-group-item">
                                <div class="row">
                                    @can('update',$activity)
                                        <div class="col-md-1">
                                            <form method="get" action="{{route('activities_edit')}}/{{$activity->id}}">
                                                <button class="btn btn-primary btn-sm">Uredi</button>
                                            </form>
                                        </div>
                                    @endcan
                                    @can('delete',$activity)
                                        <div class="col-md-1">
                                            <form method="get"
                                                  action="{{route('activities_delete')}}/{{$activity->id}}">
                                                <button class="btn btn-danger btn-sm">Izbriši</button>
                                            </form>
                                        </div>
                                    @endcan
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection