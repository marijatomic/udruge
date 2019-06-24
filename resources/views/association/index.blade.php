@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="row">
                    <div class="col-md-11">
                        <h4>Udruge</h4>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Naziv</th>
                        <th scope="col">Opis</th>
                        <th scope="col">Godina osnivanja</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Fakultet</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($associations as $association)
                        <tr class="table-light">
                            <th scope="row"><a href="../associations/{{$association->id}}">{{$association->name}}</a>
                            </th>
                            <td>{{$association->description}}</td>
                            <td>{{$association->year}}</td>
                            <td>{{$association->email}}</td>
                            <td>{{$association->phone}}</td>
                            <td>
                                <a href="../faculties/{{$association->faculty->id}}">{{$association->faculty->short_name}}</a>
                            </td>
                            <td>
                                @can('update',$association)
                                    <form method="get" action="{{route('associations_edit')}}/{{$association->id}}">
                                        <button class="btn btn-primary btn-sm">Uredi</button>
                                    </form>
                                @endcan
                            </td>

                            <td>
                                @can('delete',$association)
                                    <form method="get" action="{{route('associations_delete')}}/{{$association->id}}">
                                        <button class="btn btn-danger btn-sm">Izbriši</button>
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection