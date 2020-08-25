<!-- <div class="card shadow-sm mb-3">
    <div class="card-header border-bottom-0 d-flex justify-content-between bg-white">
        <span class="lead font-weight-normal">Найдено проектов</span>
        <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">{{ $projects->total() }}</span>
    </div>
</div> -->

@foreach ($projects as $project)
<div class="card mb-3 shadow-sm block-bg-owner-lt">
    <div class="card-header bg-transparent">
        <img src="{{ Arr::random($faces) }}" class="img-thumbnail rounded-circle float-left mr-3">
        <a href="#" class="lead font-weight-bold">
            {{ Str::limit($project->name, 50) }}
        </a>
    </div>
    <div class="card-body">
        <div class="card-title font-weight-bold">Краткое описание проекта</div>
        <p class="card-text">
            {{ Str::limit($project->description, 100) }}
        </p>
        <div class="card-title font-weight-bold">Активность автора по проекту за последние 10 дней</div>
        <div class="progress" style="height: 40px;">
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <?php
                $rnd = rand(0, 10);
                $progressColor = 'bg-secondary';
                $progressHint = 'Сегодня я немного забил...';

                if ($rnd > 7) {
                    $progressColor = 'bg-danger';
                    $progressHint = 'Я в ударе! Сделал кучу всего :)';
                }
                if ($rnd > 5 && $rnd <= 7) {
                    $progressColor = 'bg-primary';
                    $progressHint = 'Чувствую идет вдохновение...';
                }
                if ($rnd >= 1 && $rnd <= 5) {
                    $progressColor = 'bg-info';
                    $progressHint = 'Работаю по графику...';
                }
                ?>

                <div class="progress-bar {{ $progressColor }}" role="progressbar" style="width: 10%;" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="{{ $progressHint }}">{{$rnd}}</div>
            <?php endfor; ?>
        </div>
    </div>

    <ul class="list-group list-group-flush border-top">
        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent text-muted">
            Участвуют в проекте
            <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
            </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent text-muted">
            Активности по проекту
            <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
            </span>
        </li>
    </ul>
</div>
@endforeach

{{ $projects->links() }}