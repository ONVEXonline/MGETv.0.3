<!-- <div class="card mb-3 d-none d-md-block bg-transparent border-0">
    <div class="card-header border-bottom-0 bg-transparent d-flex justify-content-end align-items-center">
        Все активности за текущий день
        <span class="alert-light px-2 py-1 ml-3 rounded-sm font-weight-normal">
            <?php echo number_format(rand(1000, 10000), 0, '', ' '); ?>
        </span>
    </div>
</div> -->


@foreach ($activities as $activity)
<div class="card mb-3">
    <div class="card-body">
        {{-- Begin Mobile --}}
        <div class="d-block d-md-none">
            <div class="">
                <img src="{{ Arr::random($faces) }}" class="img-thumbnail rounded-circle mr-3 float-left">

                <div>
                    <?php
                    $activityType = rand(1, 100);
                    ?>

                    @if($activityType < 50)
                    <span class="font-weight-bold">
                        <i class="fas fa-comment-alt"></i>
                        {{ now()->subMinutes(rand(1, 30))->diffForHumans() }}
                    </span>
                    новый комментарии от
                    <a href="#" class="font-weight-bold">
                        {{ $activity->user->name }}
                    </a>
                    по проекту
                    <a href="{{ url('project/'.$activity->project_id) }}" class="font-weight-bold">
                        {{ Str::limit($activity->project->name, 30) }}
                    </a>
                    @else
                    <span class="font-weight-bold">
                        <i class="fas fa-arrow-alt-circle-down"></i>
                        {{ now()->subMinutes(rand(1, 30))->diffForHumans() }}
                    </span>
                    автор проекта
                    <a href="#" class="font-weight-bold">
                        {{ $activity->user->name }}
                    </a>
                    внес изменения по проекту
                    <a href="{{ url('project/'.$activity->project_id) }}" class="font-weight-bold">
                        {{ Str::limit($activity->project->name, 30) }}
                    </a>
                    @endif
                </div>
            </div>
        </div>
        {{-- End Mobile --}}

        {{-- Begin Desktop --}}
        <div class="d-none d-md-block">
            <div class="">
                <img src="{{ Arr::random($faces) }}" class="img-thumbnail rounded-circle mr-3 float-left">

                <div>
                    <?php
                    $activityType = rand(1, 100);
                    ?>

                    @if($activityType < 50)

                    <span class="font-weight-bold">
                        <i class="fas fa-comment-alt"></i>
                        {{ now()->subMinutes(rand(1, 30))->diffForHumans() }}
                    </span>
                    новый комментарии от
                    <a href="#" class="font-weight-bold">
                        {{ $activity->user->name }}
                    </a>
                    по проекту
                    <a href="{{ url('project/'.$activity->project_id) }}" class="font-weight-bold">
                        {{ Str::limit($activity->project->name, 100) }}
                    </a>
                    @else
                    <span class="font-weight-bold">
                        <i class="fas fa-arrow-alt-circle-down"></i>
                        {{ now()->subMinutes(rand(1, 30))->diffForHumans() }}
                    </span>
                    автор проекта
                    <a href="#" class="font-weight-bold">
                        {{ $activity->user->name }}
                    </a>
                    внес изменения по проекту
                    <a href="{{ url('project/'.$activity->project_id) }}" class="font-weight-bold">
                        {{ Str::limit($activity->project->name, 100) }}
                    </a>

                    @endif
                </div>

            </div>
        </div>
        {{-- End Desktop --}}
        <div class="card-text text-dark">
            <blockquote class="blockquote">
                <footer class="blockquote-footer">
                    <a href="#" class="font-weight-normal text-muted">
                        {{ Str::limit($activity->comment, 100) }}
                    </a>
                </footer>
            </blockquote>
        </div>
    </div>
</div>
@endforeach

{{ $activities->links() }}