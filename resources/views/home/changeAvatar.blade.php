@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home/edit.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto m-5">
            <div class="panel p-5">
                <div class="panel-heading m-5"><h2>Change Avatar</h2></div>
                <div class="panel-body m-5">
                    <form class="form-horizontal" method="POST" action="{{ route('home.uploadAvatar') }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        <div class="row col-md-12 mb-4">
                            <div class="col-4">
                                <img src="/images/{{ Auth::user()->avatar }}" style="width:100px;height:100px;">
                            </div>
                            <div class="col-8 my-auto">
                                <input id="avatar" type="file" name="avatar">
                                @if ($errors->has('avatar'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-4">
                                <button type="submit" class="btn btn-primary"> Save </button>
                                <a href="{{ route('home', ['id' => Auth::user()->id]) }}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection