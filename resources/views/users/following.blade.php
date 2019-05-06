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
                    <h2>{{ $user->first_name }}'s Following</h2>
                    <div class="pull-right"> </div>
                </div>

                <div class="panel-body">
                    <div class="list-group p-4">
                        @foreach($following as $followee)
                            <div class="list-group-item mb-1"> 
                                <form class=" d-flex align-items-center" method="post" action="#">
                                    <img src="/images/default.jpg" style="width:50px;height:50px;"> 
                                    <a class="pl-3" href="{{ route('user.show', ['id' => $followee->id]) }}"> {{ $followee->first_name }} {{ $followee->last_name }} </a>
                                    @if (Auth::user()->id == $followee->id)
                                    @elseif (Auth::user()->is_following($followee->id) !== false)
                                        <div class="ml-auto">
                                            <a href="{{ route('user.unfollow', ['unfollowed_id' => $followee->id]) }}" class="btn btn-danger"> Unfollow </a>
                                        </div>
                                    @elseif (Auth::user()->is_following($followee->id) === false)
                                        <div class="ml-auto">
                                            <a href="{{ route('user.follow', ['followed_id' => $followee->id]) }}" class="btn btn-primary"> Follow </a>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection