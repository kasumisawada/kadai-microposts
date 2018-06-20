<ul class="media-list">
@foreach ($microposts as $micropost)
    <?php $user = $favorite->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $micropost->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($micropost->content)) !!}</p>
            </div>
            <div>
                @include('favorite.favorite_button', ['micropost' => $micropost])
                
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $microposts->render() !!}