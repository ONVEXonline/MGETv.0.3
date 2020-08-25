<!-- <div class="card mb-3 d-none d-md-block bg-transparent border-0">
    <div class="card-header border-bottom-0 bg-transparent d-flex justify-content-end">
        <div class="form-row">
            <div class="col-auto">
                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                    <option>Активность</option>
                    <option>Недавно активные</option>
                    <option>Совсем не активные</option>
                    <option>Заброшенные</option>
                </select>
            </div>
            <div class="col-auto">
                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                    <option>Готовность</option>
                    <option>Готовы к инвестициям</option>
                    <option>Неготовы к инвестициям</option>
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary btn-sm">Сортировать</button>
            </div>
        </div>
    </div>
</div> -->

@foreach ($projects as $project)
<div class="card mb-3">
    {{-- Begin Mobile --}}
    <div class="card-header d-block d-md-none bg-white">
        <div class="text-center">
            <img src="{{ Arr::random($facesBig) }}" class="img-thumbnail rounded-circle" width="100">

            <!-- <a href="{{ url('/project/'.$project->id) }}" class="lead font-weight-bold">
                {{ Str::limit($project->name, 35) }}
            </a> -->
        </div>
    </div>
    {{-- End Mobile --}}


    {{-- Begin Desktop --}}
    <div class="d-none d-md-block">
        <div class="card-header d-flex justify-content-between align-items-start">
            <div>
                <img src="{{ Arr::random($facesSmall) }}" class="img-thumbnail rounded-circle mr-3 float-left">
                <a href="{{ url('/project/'.$project->id) }}" class="lead font-weight-bold">
                    {{ Str::limit($project->name, 100) }}
                </a>
            </div>
            <span class="bg-white px-3 py-1 border rounded-sm font-weight-normal ml-5 h1 text-dark" data-toggle="tooltip" data-placement="left" title="Рейтинг активности">
                <?php echo number_format(rand(1, 10), 0, '', ' '); ?>
            </span>
        </div>
    </div>
    {{-- End Desktop --}}

    {{-- Begin Mobile --}}
    <ul class="list-group list-group-flush border-top-0 d-block d-md-none">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Рейтинг активности
            <h4>
                <span class="badge alert-info px-2 py-1 rounded-sm font-weight-normal">
                    <?php echo number_format(rand(1, 10), 0, '', ' '); ?>
                </span>
            </h4>
        </li>
    </ul>

    <div class="card-body d-block d-md-none">
        <div class="card-title font-weight-bold">Название проекта</div>
        <p class="card-text">
            <a href="{{ url('/project/'.$project->id) }}">
                {{ Str::limit($project->name, 70) }}
            </a>
        </p>
    </div>

    <div class="card-body d-block d-md-none">
        <div class="card-title font-weight-bold">Краткое описание проекта</div>
        <p class="card-text">
            {{ Str::limit($project->description, 100) }}
        </p>
    </div>
    {{-- End Mobile --}}

    {{-- Begin Desktop --}}
    <div class="card-body d-none d-md-block">
        <div class="card-title font-weight-bold">Краткое описание проекта</div>
        <p class="card-text">
            {{ Str::limit($project->description, 200) }}
        </p>
    </div>
    {{-- End Desktop --}}

    {{-- Begin Desktop --}}
    <div class="card-body d-none d-md-block">
        <div class="d-inline p-2 mr-1 bg-light text-dark" data-toggle="tooltip" data-placement="top" title="Стадия">
            {{ Str::limit($project->name, 10) }}
        </div>
        <div class="d-inline p-2 mr-1 bg-light text-dark" data-toggle="tooltip" data-placement="top" title="Категории">
            {{ Str::limit($project->description, 50) }}
        </div>
    </div>
    {{-- End Desktop --}}

    {{-- Begin Mobile --}}
    <div class="card-body d-block d-md-none">
        <div class="card-text mb-3">
            <span class="font-weight-bold">Стадия</span> <i class="fas fa-long-arrow-alt-right"></i> {{ Str::limit($project->name, 10) }}
        </div>
        <div class="card-text">
            <span class="font-weight-bold">Категории</span> <i class="fas fa-long-arrow-alt-right"></i> {{ Str::limit($project->description, 50) }}
        </div>
    </div>
    {{-- End Mobile --}}

    {{-- Begin Desktop --}}
    <div class="card-footer bg-transparent d-none d-md-block">
        <a class="btn btn-sm btn-primary" href="#" role="button">
            Подписаться
        </a>
        <a class="btn btn-sm btn-light" href="#" role="button">
            Лента активности
        </a>
        <div class="d-inline">
            <div class="d-inline p-2 mr-1 alert-light text-dark" data-toggle="tooltip" data-placement="top" title="Кол-во комментариев">
                <i class="fas fa-comment-alt text-muted"></i>
                <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
            </div>
            <div class="d-inline p-2 mr-1 alert-light text-dark" data-toggle="tooltip" data-placement="top" title="Проект нравится">
                <i class="fas fa-thumbs-up text-muted"></i>
                <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
            </div>
            <div class="d-inline p-2 mr-1 alert-light text-dark" data-toggle="tooltip" data-placement="top" title="Проект не нравится">
                <i class="fas fa-thumbs-down text-muted"></i>
                <?php echo number_format(rand(1, 10), 0, '', ' '); ?>
            </div>
            <div class="d-inline p-2 mr-1 alert-light text-dark" data-toggle="tooltip" data-placement="top" title="Следят за проектом">
                <i class="fas fa-eye text-muted"></i>
                <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
            </div>
        </div>
    </div>
    {{-- End Desktop --}}

    {{-- Begin Mobile --}}
    <div class="card-footer bg-transparent text-center d-block d-md-none">
        <a class="btn btn-sm btn-primary" href="#" role="button">
            Подписаться
        </a>
        <a class="btn btn-sm btn-light" href="#" role="button">
            Лента активности
        </a>
    </div>
    <div class="card-footer bg-transparent text-center d-block d-md-none">
        <div class="d-inline p-2 mr-1 alert-light text-dark" data-toggle="tooltip" data-placement="top" title="Кол-во комментариев">
            <i class="fas fa-comment-alt text-muted"></i>
            <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
        </div>
        <div class="d-inline p-2 mr-1 alert-light text-dark" data-toggle="tooltip" data-placement="top" title="Проект нравится">
            <i class="fas fa-thumbs-up text-muted"></i>
            <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
        </div>
        <div class="d-inline p-2 mr-1 alert-light text-dark" data-toggle="tooltip" data-placement="top" title="Проект не нравится">
            <i class="fas fa-thumbs-down text-muted"></i>
            <?php echo number_format(rand(1, 10), 0, '', ' '); ?>
        </div>
        <div class="d-inline p-2 mr-1 alert-light text-dark" data-toggle="tooltip" data-placement="top" title="Следят за проектом">
            <i class="fas fa-eye text-muted"></i>
            <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
        </div>
    </div>
    {{-- End Mobile --}}
</div>
@endforeach

{{ $projects->links() }}