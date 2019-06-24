@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card">
                    <div class="card-header">Kreiraj novu aktivnost za udrugu {{$association->name}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('activities_create') }}/{{$association->id}}">
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

                            <!--start_date-->
                            <div class="form-group row">
                                <label for="start_date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Datum početka') }}</label>

                                <div class="col-md-6">
                                    <input id="start_date" type="date"
                                           class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}"
                                           name="start_date" value="{{ old('start_date') }}" required autofocus>

                                    @if ($errors->has('start_date'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <!--end_date-->
                            <div class="form-group row">
                                <label for="end_date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Datum kraja') }}</label>

                                <div class="col-md-6">
                                    <input id="end_date" type="date"
                                           class="form-control{{ $errors->has('end_date') ? ' is-invalid' : '' }}"
                                           name="end_date" value="{{ old('end_date') }}" required autofocus>

                                    @if ($errors->has('end_date'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('end_date') }}</strong>
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