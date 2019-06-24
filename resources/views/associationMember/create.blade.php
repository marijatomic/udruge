@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card">
                    <div class="card-header">Dodaj novog člana u {{$association->name}}</div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('members_create') }}/{{$association->id}}">
                            @csrf
                            <div class="form-group row">
                                <label for="user"
                                       class="col-md-4 col-form-label text-md-right">Korisnici</label>

                                <div class="col-md-6">
                                    @if(count($users)>0)
                                        <select class="form-control noborder" id="select" name="user_id">

                                            @foreach($users as $user)

                                                <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}</option>

                                            @endforeach

                                        </select>
                                    @endif

                                    @if ($errors->has('user'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        {{ __('Dodaj') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <br>
                <br>
                <div class="card">
                    <div class="card-header">Članovi</div>
                    <div class="card-body">
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
                            @foreach($members as $member)
                                <tr class="table-light">

                                    @csrf
                                    <th scope="row"><a href="../../{{'users'}}/{{$member->user->id}}">{{$member->user->name}} {{$member->user->surname}}</a></th>
                                    <td>{{$member->user->index}}</td>
                                    <td>{{$member->user->birth_date}}</td>
                                    <td>{{$member->user->email}}</td>
                                    <td>{{$member->user->phone}}</td>

                                    <td>
                                        <form method="get" action="{{route('members_delete')}}/{{$association->id}}">
                                            <input type="hidden" name="user_id" value="{{$member->user->id}}">
                                            <button type="submit" class="btn btn-danger btn-sm">Izbriši</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection