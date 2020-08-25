<div class="container-fluid bg-dark mt-5">
    <div class="container-xl py-3">
        <div class="row">
            <div class="col-md-4">

                {{-- Begin 1 category --}}
                <ul class="list-group list-group-flush">
                    @php ($showMenuHeader = true)
                    @foreach ($footerMenu as $menu)
                        @if($menu->page_category_id == 1)
                            @if($showMenuHeader)
                            @php ($showMenuHeader = false)
                            <li class="list-group-item bg-transparent">
                                <a href="{{ url($menu->pageCategory->slug) }}" class="text-white font-weight-bold lead">
                                {{ $menu->pageCategory->name}}
                                </a>
                            </li>
                            @endif

                        <li class="list-group-item bg-transparent">
                            <a href="{{ url($menu->pageCategory->slug.'/'.$menu->slug) }}" class="text-white">{{ $menu->title }}</a>
                        </li>

                        @endif
                    @endforeach
                </ul>
                {{-- End 1 category --}}

            </div>
            <div class="col-md-4">

                {{-- Begin 2 category --}}
                <ul class="list-group list-group-flush">
                    @php ($showMenuHeader = true)
                    @foreach ($footerMenu as $menu)
                        @if($menu->page_category_id === 2)
                            @if($showMenuHeader)
                            @php ($showMenuHeader = false)
                            <li class="list-group-item bg-transparent">
                                <a href="{{ url($menu->pageCategory->slug) }}" class="text-white font-weight-bold lead">
                                {{ $menu->pageCategory->name}}
                                </a>
                            </li>
                            @endif

                        <li class="list-group-item bg-transparent">
                            <a href="{{ url($menu->pageCategory->slug.'/'.$menu->slug) }}" class="text-white">{{ $menu->title }}</a>
                        </li>

                        @endif
                    @endforeach
                </ul>
                {{-- End 2 category --}}

            </div>
            <div class="col-md-4">

                {{-- Begin 3 category --}}
                <ul class="list-group list-group-flush">
                    @php ($showMenuHeader = true)
                    @foreach ($footerMenu as $menu)
                        @if($menu->page_category_id == 3)
                            @if($showMenuHeader)
                            @php ($showMenuHeader = false)
                            <li class="list-group-item bg-transparent">
                                <a href="{{ url($menu->pageCategory->slug) }}" class="text-white font-weight-bold lead">
                                {{ $menu->pageCategory->name}}
                                </a>
                            </li>
                            @endif

                        <li class="list-group-item bg-transparent">
                            <a href="{{ url($menu->pageCategory->slug.'/'.$menu->slug) }}" class="text-white">{{ $menu->title }}</a>
                        </li>

                        @endif
                    @endforeach
                </ul>
                {{-- End 3 category --}}

                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Подписаться на рассылку" aria-label="Подписаться на рассылку" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="button-addon2">OK</button>
                            </div>
                        </div>

                        <a href="#"><i class="fab fa-vk h2 ml-3 text-white"></i></a>
                        <a href="#"><i class="fab fa-facebook h2 ml-3 text-white"></i></a>
                        <a href="#"><i class="fab fa-instagram h2 ml-3 text-white"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

