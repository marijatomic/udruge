@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card">
                    <div class="card-header">{{ __('Kreiraj novu udrugu') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('associations_create') }}">
                        @csrf
                        <!--name-->
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Naziv') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--description-->
                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Opis') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                           class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                           name="description" value="{{ old('description') }}" required autofocus>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--year-->
                            <div class="form-group row">
                                <label for="year"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Godina osnivanja') }}</label>

                                <div class="col-md-6">
                                    <input id="year" type="date"
                                           class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"
                                           name="year" value="{{ old('year') }}" required autofocus>

                                    @if ($errors->has('year'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
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
                                           name="email" value="{{ old('email') }}" required>

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
                                           name="phone" value="{{ old('phone') }}" required autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--faculties-->
                            <div class="form-group row">
                                <label for="faculty"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Fakultet') }}</label>

                                <div class="col-md-6">
                                    @if(count($faculties)>0)
                                        <select class="form-control noborder" id="select" name="faculty_id">
                                            @foreach($faculties as $faculty)
                                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                            @endforeach
                                        </select>
                                    @endif

                                    @if ($errors->has('faculty'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--users-->
                            <div class="form-group row">
                                <label for="user"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Predsjednik') }}</label>

                                <div class="col-md-6">
                                    @if(count($users)>0)
                                        <select class="form-control noborder" id="select" name="president_id">
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
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Kreiraj') }}
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