@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card">
                    <div class="card-header">{{ __('Uredi korisnika') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('users_edit')}}/{{$user->id}}">
                        @csrf
                        {{method_field("PATCH")}}
                        <!--name-->
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Ime') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{$user->name}}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--surname-->
                            <div class="form-group row">
                                <label for="surname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Prezime') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                           class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                           name="surname" value="{{$user->surname}}" required autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--password-->
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Lozinka') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" >
                                </div>
                            </div>

                            <!--index-->
                            <div class="form-group row">
                                <label for="index"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Broj indeksa') }}</label>

                                <div class="col-md-6">
                                    <input id="index" type="text"
                                           class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                           name="index" value="{{$user->index}}" required autofocus>

                                    @if ($errors->has('index'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('index') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--birth_date-->
                            <div class="form-group row">
                                <label for="birth_date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Datum rođenja') }}</label>

                                <div class="col-md-6">
                                    <input id="birth_date" type="date"
                                           class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}"
                                           name="birth_date" value="{{$user->birth_date}}" required autofocus>

                                    @if ($errors->has('birth_date'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--email-->
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{$user->email}}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--phone-->
                            <div class="form-group row">
                                <label for="phone"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Broj telefona') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text"
                                           class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                           name="phone" value="{{$user->phone}}" required autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--type-->
                            <div class="form-group row">
                                <label for="type"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Tip korisnika') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control noborder" id="select" name="type">
                                        <option value="admin" {{ ($user->type == "admin") ? 'selected' : ''}}>Admin
                                        </option>
                                        <option value="user" {{ ($user->type == "user") ? 'selected' : ''}}>
                                            Obični korisnik
                                        </option>
                                    </select>

                                    @if ($errors->has('type'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Uredi') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection