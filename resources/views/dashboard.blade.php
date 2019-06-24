@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <h4>Administracija</h4>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Tablica</th>
                        <th scope="col"><i class="fa fa-table"></i></th>
                        <th scope="col"><i class="fa fa-plus"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-light">
                        <th scope="row">Fakulteti</th>

                        <td><form method="get" action="{{route('faculties')}}">
                                <button class="btn btn-primary btn-sm">Pregled</button>
                            </form></td>
                        <td><form method="get" action="{{route('faculties_create')}}">
                                <button class="btn btn-primary btn-sm">Kreiraj</button>
                            </form></td>
                    </tr>

                    <tr class="table-light">
                        <th scope="row">Udruge</th>
                        <td><form method="get" action="{{route('associations')}}">
                                <button class="btn btn-primary btn-sm">Pregled</button>
                            </form></td>
                        <td><form method="get" action="{{route('associations_create')}}">
                                <button class="btn btn-primary btn-sm">Kreiraj</button>
                            </form></td>

                    </tr>

                    <tr class="table-light">
                        <th scope="row">Korisnici</th>
                        <td><form method="get" action="{{route('users')}}">
                                <button class="btn btn-primary btn-sm">Pregled</button>
                            </form></td>

                        <td><form method="get" action="{{route('users_create')}}">
                                <button class="btn btn-primary btn-sm">Kreiraj</button>
                            </form></td>

                    </tr>
                    <tr class="table-light">
                        <th scope="row">Aktivnosti</th>
                        <td><form method="get" action="{{route('activities')}}">
                                <button class="btn btn-primary btn-sm">Pregled</button>
                            </form></td>

                        <td></td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection