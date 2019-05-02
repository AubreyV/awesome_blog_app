@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home/edit.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto m-5">
            <div class="panel p-5">
                <div class="panel-heading m-5"><h2>Edit Profile</h2></div>
                <div class="panel-body m-5">
                    <form class="form-horizontal" method="POST" action="{{ route('home.update') }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>
                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ is_null(old('first_name')) ? Auth::user()->first_name : old('first_name') }}" required autofocus>
                                @if ($errors->has('first_name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ is_null(old('last_name')) ? Auth::user()->last_name : old('last_name') }}" required autofocus>
                                @if ($errors->has('last_name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-4">
                                <button type="submit" class="btn btn-primary"> Save </button>
                                <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection