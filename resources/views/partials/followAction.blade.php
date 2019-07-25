@if (Auth::user()->is_following($user->id) == false)
    <div class="ml-auto">
        <a href="{{ route('user.follow', ['followed_id' => $user->id]) }}" class="btn btn-primary"> Follow </a>
    </div>
@else
    <div class="ml-auto">
        <a href="{{ route('user.unfollow', ['unfollowed_id' => $user->id]) }}" class="btn btn-danger"> Unfollow </a>
    </div>
@endif