@php($faceBig = Arr::random($facesBig))
@php($faceSmall = Arr::random($facesSmall))

{{-- Begin Mobile --}}
<div class="card d-block d-md-none">
    <div class="card-body text-center">
        <img src="{{ $faceBig }}" class="img-thumbnail rounded-circle" width="100">
    </div>
    <div class="card-body">
        <p class="card-text font-weight-bold">
            Краткая информация об авторе
        </p>
        <p class="card-text">
            {{ Str::limit($projectInfo->description, 100) }}
        </p>
    </div>
    <div class="card-body">
        <div class="card-text mb-3">
            <span class="font-weight-bold">ФИО</span> <i class="fas fa-long-arrow-alt-right"></i>
            {{ $projectInfo->user->name }}
        </div>
        <div class="card-text">
            <span class="font-weight-bold">Место проживания</span> <i class="fas fa-long-arrow-alt-right"></i> {{ Str::limit($projectInfo->description, 50) }}
        </div>
    </div>
</div>
{{-- End Mobile --}}

{{-- Begin Desktop --}}
<div class="card d-none d-md-block">
    <div class="card-body d-flex justify-content-between align-items-start">
        <img src="{{ $faceBig }}" class="img-thumbnail rounded-circle">

        <div class="card-text px-3">
            <div class="font-weight-bold pb-2">
                Краткая информация об авторе
            </div>
            <span class="font-weight-normal">
               {{ Str::limit($projectInfo->description, 300) }}
            </span>
        </div>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="font-weight-bold">
                ФИО
            </span>
            <span class="font-weight-normal">
                {{ $projectInfo->user->name }}
            </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="font-weight-bold">
                Место проживания
            </span>
            <span class="font-weight-normal">
                {{ Str::limit($projectInfo->description, 50) }}
            </span>
        </li>
    </ul>
</div>
{{-- End Desktop --}}

<div class="card mt-3 mb-3">
    <div class="card-header font-weight-bold lead">
        Все проекты автора
    </div>
    <ul class="list-group list-group-flush">
        @foreach($projectsByCurUser as $projectByCurUser)

        <li class="list-group-item">
            <a href="{{ url('project/'.$projectByCurUser->id) }}" class="font-weight-normal">
                {{ Str::limit($projectByCurUser->name, 400) }}
            </a>
        </li>

        @endforeach
    </ul>
</div>

{{ $projectsByCurUser->links() }}