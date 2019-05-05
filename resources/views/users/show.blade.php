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
                                <img src="/images/default.jpg" style="width:100px;height:100px;">
                            </div>
                        </div>

                        <div class="py-2">
                            <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
                        </div>

                        <div class="btn-group-justified">
                            @if (Auth::user()->is_following($user->id) == false)
                            <div class="ml-auto">
                                <a href="{{ route('user.follow', ['followed_id' => $user->id]) }}" class="btn btn-primary"> Follow </a>
                            </div>
                            @else
                            <div class="ml-auto">
                                <a href="{{ route('user.unfollow', ['unfollowed_id' => $user->id]) }}" class="btn btn-danger"> Unfollow </a>
                            </div>
                            @endif
                        </div>  

                        <div class="dropdown-divider my-4"></div>

                        <div class="row mt-15">
                            <div class="col-sm-6">
                                <strong><a href="#">6</a></strong>
                                <div>following</div>
                            </div>
                                <div class="col-sm-6">
                                    <strong><a href="#">2</a></strong>
                                <div>followers</div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-divider my-4"></div>

                    <div class="media">
                        <div class="media-body">
                            <div class="btn-group btn-group-justified">
                                <div class="well text-center">
                                    <h4>{{ $user->blogs->count() }}</h4>
                                    <small>blogs posted</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="activity-feed">
                <div class="well">
                    <div class="page-header mt-0 text-center"><h2>Blogs</h2></div>
                    
                    @foreach($user->blogs as $blog)
                    <div class="media my-3">             
                        <div class="media-left media-middle">
                            <div class="avatar square">
                                <div class="default">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 card px-0">
                            <div class="card-header text-right py-1">
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                <p>{{ $blog->content }}</p>
                                <footer class="blockquote-footer">Posted <cite>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($blog->created_at))->diffForHumans() }}</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

