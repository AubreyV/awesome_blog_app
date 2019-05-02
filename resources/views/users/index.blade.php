@extends('layouts.app')

@section('css')
<link href="{{ asset('css/users.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-2">
            <div class="panel user-list">
                <div class="panel-heading p-4">
                    <h2>All Members</h2>
                    <div class="pull-right"> </div>
                </div>

                <div class="panel-body">
                    <div class="list-group p-4">
                        @foreach($users as $user)
                            @if ($user != Auth::user())
                                <div class="list-group-item mb-1"> 
                                    <form class=" d-flex align-items-center" method="post" action="#">
                                        <img src="/images/{{ $user->avatar }}" style="width:50px;height:50px;">
                                        <a class="pl-3" href="{{ route('user.show', ['id' => $user->id]) }}"> {{ $user->first_name }} {{ $user->last_name }} </a>
                                        <div class="ml-auto">
                                            <button class="btn btn-primary btn-sm" type="submit" name="submit"> Follow </button>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection