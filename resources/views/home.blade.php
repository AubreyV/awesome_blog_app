@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel user-profile">
                <div class="panel-body">
                    <div class="text-center">
                        <div class="avatar">
                            <div class="default">
                                <img src="/images/{{ $user->avatar }}" style="width:100px;height:100px;">
                            </div>
                        </div>

                        <div class="py-2">
                            <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
                        </div>

                        @includeWhen(Auth::user()->id == $user->id, 'partials.editProfileAvatar')
                        @includeWhen(Auth::user()->id != $user->id, 'partials.followAction', compact('user'))

                        <div class="dropdown-divider my-4"></div>

                        <div class="row mt-15">
                            <div class="col-sm-6">
                                <strong><a href="{{ route('user.following', ['id' => $user->id]) }}">{{ $user->following()->count() }}</a></strong>
                                <div>following</div>
                            </div>
                                <div class="col-sm-6">
                                    <strong><a href="{{ route('user.followers', ['id' => $user->id]) }}">{{ $user->followers()->count() }}</a></strong>
                                <div>followers</div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-divider my-4"></div>

                    <div class="media">
                        <div class="media-body">
                            <div class="btn-group btn-group-justified">
                                <div class="well text-center">
                                    <h4>{{ $blogs->count() }}</h4>
                                    <small>blogs posted</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            
            @includeWhen(Auth::user()->id == $user->id, 'partials.newPost')

            <div class="activity-feed">
                <div class="well">
                    <div class="page-header mt-0 text-center"><h2>Blogs</h2></div>
                    
                    @if (Auth::user()->is_following($user->id) || Auth::user()->id == $user->id)
                        @include('partials.blogs', ['blogs' => $blogs, 'allowedToShow' => true])
                    @else
                        @include('partials.blogs', ['blogs' => $blogs, 'allowedToShow' => false])
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

