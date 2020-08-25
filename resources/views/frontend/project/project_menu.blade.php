<div class="card mb-3 shadow-sm">
    <div class="card-header font-weight-bold lead">
        Меню проекта
    </div>
    <ul class="list-group list-group-flush">

        {{-- Begin description --}}
        @if($curMenu == 'description')
        <a href="{{ url('project/'.$projectInfo->id.'/description') }}" class="list-group-item list-group-item-action active">
            Информация по проекту
        </a>
        @else
        <a href="{{ url('project/'.$projectInfo->id.'/description') }}" class="list-group-item list-group-item-action">
            Информация по проекту
        </a>
        @endif
        {{-- End description --}}

        {{-- Begin activities --}}
        @if($curMenu == 'activities')
        <a href="{{ url('project/'.$projectInfo->id.'/activities') }}" class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center">
            Активности по проекту
            <h4>
                <span class="badge bg-white text-dark px-2 py-1 rounded-sm font-weight-normal">
                    {{ number_format($projectActivitiesCount, 0, '', '&nbsp;') }}
                </span>
            </h4>
        </a>
        @else
        <a href="{{ url('project/'.$projectInfo->id.'/activities') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            Активности по проекту
            <h4>
                <span class="badge alert-info px-2 py-1 rounded-sm font-weight-normal">
                    {{ number_format($projectActivitiesCount, 0, '', '&nbsp;') }}
                </span>
            </h4>
        </a>
        @endif
        {{-- End activities --}}


        {{-- Begin discussion --}}
        @if($curMenu == 'discussion')
        <a href="{{ url('project/'.$projectInfo->id.'/discussion') }}" class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center">
            Обсуждение проекта
            <h4>
                <span class="badge bg-white text-dark px-2 py-1 rounded-sm font-weight-normal">
                    {{ number_format($commentsCount, 0, '', '&nbsp;') }}
                </span>
            </h4>
        </a>
        @else
        <a href="{{ url('project/'.$projectInfo->id.'/discussion') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            Обсуждение проекта
            <h4>
                <span class="badge alert-info px-2 py-1 rounded-sm font-weight-normal">
                    {{ number_format($commentsCount, 0, '', '&nbsp;') }}
                </span>
            </h4>
        </a>
        @endif
        {{-- End discussion --}}

        {{-- Begin author --}}
        @if($curMenu == 'author')
        <a href="{{ url('project/'.$projectInfo->id.'/author') }}" class="list-group-item list-group-item-action active">
            Автор проекта
        </a>
        @else
        <a href="{{ url('project/'.$projectInfo->id.'/author') }}" class="list-group-item list-group-item-action">
            Автор проекта
        </a>
        @endif
        {{-- End author --}}


        {{-- Begin team --}}
        @if($curMenu == 'team')
        <a href="{{ url('project/'.$projectInfo->id.'/team') }}" class="list-group-item list-group-item-action active">
            Команда проекта
        </a>
        @else
        <a href="{{ url('project/'.$projectInfo->id.'/team') }}" class="list-group-item list-group-item-action">
            Команда проекта
        </a>
        @endif
        {{-- End team --}}
    </ul>
</div>