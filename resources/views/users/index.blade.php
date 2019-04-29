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
                        <div class="list-group-item mb-1"> 
                            <form class=" d-flex align-items-center" method="post" action="#">
                                <img src="/images/default.jpg" style="width:50px;height:50px;"> 
                                <a class="pl-3" href=""> User1 </a>
                                <div class="ml-auto">
                                    <button class="btn btn-primary btn-sm" type="submit" name="submit"> Follow </button>
                                </div>
                            </form>
                        </div>

                        <div class="list-group-item mb-1"> 
                            <form class=" d-flex align-items-center" method="post" action="#">
                                <img src="/images/default.jpg" style="width:50px;height:50px;"> 
                                <a class="pl-3" href=""> User2 </a>
                                <div class="ml-auto">
                                    <button class="btn btn-primary btn-sm" type="submit" name="submit"> Follow </button>
                                </div>
                            </form>
                        </div>

                        <div class="list-group-item mb-1"> 
                            <form class=" d-flex align-items-center" method="post" action="#">
                                <img src="/images/default.jpg" style="width:50px;height:50px;"> 
                                <a class="pl-3" href=""> User3 </a>
                                <div class="ml-auto">
                                    <button class="btn btn-primary btn-sm" type="submit" name="submit"> Follow </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection