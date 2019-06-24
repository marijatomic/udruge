@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card border-primary mb-4">
                    <div class="card-header"> {{$faculty->name}}</div>
                    <div class="card-body">


                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-university"></i> {{$faculty->short_name}}</li>
                            <li class="list-group-item"><i class="fa fa-map-marker-alt"></i> {{$faculty->address}}</li>
                            <li class="list-group-item"><i class="fa fa-envelope"></i> {{$faculty->email}}</li>
                            <li class="list-group-item"><i class="fa fa-mobile-alt"></i> {{$faculty->phone}}</li>
                            <li class="list-group-item">
                                <div class="accordion" id="accordionExample" data-toggle="collapse"
                                     data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div data-toggle="collapse" data-target="#collapseOne"
                                         aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-users-cog"></i> Udruge <i
                                                class="fas fa-chevron-down text-muted"></i>
                                    </div>

                                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                @foreach($faculty->associations as $association)
                                                    <li class="list-group"><a
                                                                href="../associations/{{$association->id}}">{{$association->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    @can('update',$faculty)
                                        <div class="col-md-1">
                                            <form method="get" action="{{route('faculties_edit')}}/{{$faculty->id}}">
                                                <button class="btn btn-primary btn-sm">Uredi</button>
                                            </form>
                                        </div>
                                    @endcan
                                    @can('delete',$faculty)
                                        <div class="col-md-1">
                                            <form method="get" action="{{route('faculties_delete')}}/{{$faculty->id}}">
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