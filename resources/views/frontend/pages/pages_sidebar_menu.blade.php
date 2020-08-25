<div class="card mb-3 shadow-sm">
    <div class="card-header font-weight-bold lead">
        {{ $pageCategoryName}}
    </div>

    <div class="list-group list-group-flush">
        @foreach ($pageCategoryMenu as $menu)
            @php ($active = '')
            @if(Request::segment(2) == $menu->slug)
            @php ($active = 'active')
            @endif

            <a href="{{ url($menu->pageCategory->slug.'/'.$menu->slug) }}" class="list-group-item list-group-item-action {{ $active }}">
                {{ $menu->title }}
            </a>

        @endforeach
    </div>

</div>
