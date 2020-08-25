@php($face = Arr::random($facesSmall))
@foreach ($projectActivities as $activity)
<div class="card mb-3">
    <div class="card-body d-flex justify-content-between align-items-start">

        <img src="{{ $face }}" class="img-thumbnail rounded-circle mr-3" style="min-height: 48px;">

        <div class="card-text text-dark">
            <a href="#" class="font-weight-bold">
                {{ $activity->project->user->name }}
            </a>
            опубликовал
            <span class="font-weight-bold">
                {{ now()->subMinutes(rand(1, 30))->diffForHumans() }}
            </span>
            новую активность по проекту
            <a href="#" class="font-weight-bold">
                {{ $activity->project->name }}
            </a>
            <blockquote class="blockquote">
                <footer class="blockquote-footer">
                    {{ Str::limit($activity->comment, 200) }}
                </footer>
            </blockquote>
        </div>
    </div>
</div>
@endforeach

{{ $projectActivities->links() }}