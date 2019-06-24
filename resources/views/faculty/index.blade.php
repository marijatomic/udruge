@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="row">
                    <div class="col-md-11">
                        <h4>Fakulteti</h4>
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('faculties_create')}}"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Naziv</th>
                        <th scope="col">Adresa</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faculties as $faculty)
                        <tr class="table-light">
                            <th scope="row"><a href="../faculties/{{$faculty->id}}">{{$faculty->short_name}}</a></th>
                            <td>{{$faculty->address}}</td>
                            <td>{{$faculty->email}}</td>
                            <td>{{$faculty->phone}}</td>
                            <td><form method="get" action="{{route('faculties_edit')}}/{{$faculty->id}}">
                                    <button class="btn btn-primary btn-sm">Uredi</button>
                                </form></td>
                            <td><form method="get" action="{{route('faculties_delete')}}/{{$faculty->id}}">
                                    <button class="btn btn-danger btn-sm">Izbriši</button>
                                </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection