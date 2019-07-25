@if (!$allowedToShow)
<div class="text-center text-danger">
    <h3> You are not following this user! </h3>
</div>
@else
    @foreach($blogs as $blog)
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
                <a class="btn btn-warning" role="button" href="{{ route('blog.edit', ['blog' => $blog]) }}"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                <form class="d-inline" action="{{ route('blog.delete', ['blog' => $blog]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                </form>
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
@endif