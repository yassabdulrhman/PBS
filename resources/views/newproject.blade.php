@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/newproject" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Project ID') }}</label>

                            <div class="col-md-6">
                                <input id="projectID" type="text" class="form-control @error('projectID') is-invalid @enderror" name="projectID" value="{{ old('projectID') }}" required autocomplete="projectID" autofocus>

                                @error('projectID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('National ID') }}</label>

                            <div class="col-md-6">
                                <input id="nationalID" type="text" class="form-control @error('nationalID') is-invalid @enderror" name="nationalID" value="{{ old('nationalID') }}" required autocomplete="nationalID" autofocus>

                                @error('nationalID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('name') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bra_id" class="col-md-4 col-form-label text-md-right">{{ __('Age:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="type" name="type">
                                @foreach($age as $ages)
                                <option value="{{$ages->id}}">{{$ages->age}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bra_id" class="col-md-4 col-form-label text-md-right">{{ __('countrie:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="contrary" name="contrary">
                                @foreach($city as $citys)
                                <option value="{{$citys->id}}">{{$citys->Country}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bra_id" class="col-md-4 col-form-label text-md-right">{{ __('Nationality:') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="nationality" name="nationality">
                                @foreach($city as $citys)
                                <option value="{{$ages->id}}">{{$citys->Nationality}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Patented') }}</label>

                            <div class="col-md-6">
                              <input type="hidden" name="patented" value="0" />
                                <input id="patented" type="checkbox" class="form-control @error('nationalID') is-invalid @enderror" name="patented" value="1">

                                @error('Patented')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Specialization') }}</label>

                            <div class="col-md-6">
                                <input id="specialization" type="text" value="1" class="form-control @error('details') is-invalid @enderror" name="specialization" value="{{ old('specialization') }}" required autocomplete="details" autofocus>

                                @error('details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('details') }}</label>

                            <div class="col-md-6">
                                <textarea id="details" type="text" class="form-control @error('details') is-invalid @enderror" name="details" value="{{ old('details') }}" autocomplete="details" autofocus></textarea>

                                @error('details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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
