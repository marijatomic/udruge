@extends('layouts.app')


@section('content')
    <div class="container">
        <br>
        <div class="row justify-content-center">

            <div class="row col-md-10">

                @foreach($activities as $activity)
                    <div class="col-md-4">
                        <div class="card border-primary mb-4" style="height:420px;">
                            <h4 class="card-header"><a
                                        href="activities/{{$activity->id}}">{{ \Illuminate\Support\Str::words($activity->name, 6,'....')  }}</a>
                            </h4>
                            <div class="card-body">
                                <p class="card-text"> {{ \Illuminate\Support\Str::words($activity->description, 20,'....')  }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-muted"><i
                                            class="fa fa-calendar-day"></i> {{$activity->start_date}}</li>
                                <li class="list-group-item text-muted"><i
                                            class="fa fa-calendar-times"></i> {{$activity->end_date}}</li>
                            </ul>
                            <div class="card-footer text-muted">
                                <a href="associations/{{$activity->association->id}}">{{$activity->association->name}}</a>
                                <div class="row">

                                    @can('update',$activity)

                                        <div class="col-md-3">
                                            <form method="get" action="{{route('activities_edit')}}/{{$activity->id}}">
                                                <button class="btn btn-primary btn-sm">Uredi</button>
                                            </form>
                                        </div>
                                    @endcan
                                    @can('delete',$activity)
                                        <div class="col-md-3">
                                            <form method="get"
                                                  action="{{route('activities_delete')}}/{{$activity->id}}">
                                                <button class="btn btn-danger btn-sm">Izbriši</button>
                                            </form>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection