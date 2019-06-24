@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="row">
                    <div class="col-md-11">
                        <h4>Korisnici</h4>
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('users_create')}}"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Ime i prezime</th>
                        <th scope="col">Indeks</th>
                        <th scope="col">Datum rođenja</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="table-light">
                            <th scope="row"><a href="../users/{{$user->id}}">{{$user->name}} {{$user->surname}}</a></th>
                            <td>{{$user->index}}</td>
                            <td>{{$user->birth_date}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                <form method="get" action="{{route('users_edit')}}/{{$user->id}}">
                                    <button class="btn btn-primary btn-sm">Uredi</button>
                                </form>
                            </td>
                            <td>
                                <form method="get" action="{{route('users_delete')}}/{{$user->id}}">
                                    <button class="btn btn-danger btn-sm">Izbriši</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection