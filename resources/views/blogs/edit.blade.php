@extends('layouts.app')

@section('css')
<link href="{{ asset('css/blog/edit.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="col-8 edit-post mx-auto my-4">
        <form action="{{ route('blog.update', ['blog' => $blog]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <textarea class="form-control" placeholder="Share your thoughts..." rows="3" name="blog_content">{{ $blog->content }}</textarea>
            </div>
            <div class="text-right">
                <button class="create-post btn btn-primary" type="submit">Submit</button>
                <a class="btn btn-secondary" role="button" href="{{ route('home', ['id' => Auth::user()->id]) }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection