@foreach ($commentsInfo as $comment)
<div class="card mb-3">
    <div class="card-body d-flex justify-content-between align-items-start">

        <img src="{{ Arr::random($facesSmall) }}" class="img-thumbnail rounded-circle mr-3" style="min-height: 48px;">

        <div class="card-text text-dark">
            <a name="comment_{{ $comment->id }}"></a>
            <a href="#" class="font-weight-bold">
                {{ $comment->user->name }}
            </a>
            написал
            <span class="font-weight-bold">
                {{ now()->subMinutes(rand(1, 30))->diffForHumans() }}
            </span>
            @if($comment->parent_id)
            ответ на <a href="#comment_{{ $comment->parent_id }}">комментарий #{{ $comment->parent_id }}</a>
            @endif
            <blockquote class="blockquote">
                <footer class="blockquote-footer">
                    {{ Str::limit($comment->comment, 200) }}
                </footer>
            </blockquote>
        </div>
    </div>
</div>
@endforeach

{{ $commentsInfo->links() }}