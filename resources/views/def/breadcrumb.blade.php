<div class="mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item font-weight-normal lead">
                <a href="{{ url('/') }}">Главная страница</a>
            </li>
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($loop->last)
                <li class="breadcrumb-item font-weight-normal lead" aria-current="page">
                    {{ $breadcrumb['title'] }}
                </li>
                @else
                    @if(is_array($breadcrumb['url']))
                    <li class="breadcrumb-item dropdown lead font-weight-normal">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $breadcrumb['url'][0]['title'] }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            @foreach ($breadcrumb['url'] as $subitem)
                            @if ($loop->first) @continue @endif
                            <a href="{{ url($subitem['url']) }}" class="dropdown-item">
                                {{ $subitem['title'] }}
                            </a>
                            @endforeach
                        </div>
                    </li>
                    @else
                    <li class="breadcrumb-item font-weight-normal lead">
                        <a href="{{ url($breadcrumb['url']) }}">{{ $breadcrumb['title'] }}</a>
                    </li>
                    @endif
                @endif
            @endforeach
        </ol>
    </nav>
</div>
