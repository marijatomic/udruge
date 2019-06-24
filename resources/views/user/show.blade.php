@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card border-primary mb-3">
                    <div class="card-header"> {{$user->name}} {{$user->surname}}</div>
                    <div class="card-body">


                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-book"></i> {{$user->index}}</li>
                            <li class="list-group-item"><i class="fa fa-calendar-day"></i> {{$user->birth_date}}</li>
                            <li class="list-group-item"><i class="fa fa-envelope"></i> {{$user->email}}</li>
                            <li class="list-group-item"><i class="fa fa-mobile-alt"></i> {{$user->phone}}</li>
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
                                            <ul class="list-group">
                                                @foreach($members as $member)
                                                    <li class="list-group"><a
                                                                href="../associations/{{$member->association->id}}">{{$member->association->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-1">
                                        @can('update',$user)
                                            <form method="get" action="{{route('users_edit')}}/{{$user->id}}">
                                                <button class="btn btn-primary btn-sm">Uredi</button>
                                            </form>
                                        @endcan
                                    </div>
                                    <div class="col-md-1">
                                        @can('delete',$user)
                                            <form method="get" action="{{route('users_delete')}}/{{$user->id}}">
                                                <button class="btn btn-danger btn-sm">Izbriši</button>
                                            </form>
                                        @endcan
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection