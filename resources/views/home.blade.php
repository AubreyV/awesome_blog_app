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
                            <h2>Your Name</h2>
                        </div>

                        <div class="btn-group-justified">
                            <a href="#" class="btn btn-primary">Edit Profile</a>
                        </div>  

                        <hr>

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

                    <hr>

                    <div class="media">
                        <div class="media-body">
                            <div class="btn-group btn-group-justified">
                                <div class="well text-center">
                                    <h4>1</h4>
                                    <small>blogs posted</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="new-post mb-4">
                <form>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Share your thoughts..."></textarea>
                    </div>
                    <div class="text-right">
                        <button class="create-post btn btn-primary" type="submit">Post</button>
                    </div>
                </form>
            </div>

            <div class="activity-feed">
                <div class="well">
                    <div class="page-header mt-0 text-center"><h2>Blogs</h2></div>
                    <div class="media">             
                        <div class="media-left media-middle">
                            <div class="avatar square">
                                <div class="default">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 card px-0">
                            <div class="card-header text-right py-1">
                                <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer">Posted <cite>13 hrs ago</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

