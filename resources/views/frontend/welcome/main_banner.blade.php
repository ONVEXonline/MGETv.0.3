{{-- Версия для мобильных  --}}

<div class="jumbotron rounded-0 d-block d-md-none main-banner-bg pb-0 bg-transparent">
    <div class="row">
        <div class="col-md-7 text-center">
            <h1 class="display-5 font-weight-bold mt-5 text-white">
                Ваша идея достойна инвестиций
            </h1>

            <div class="lead text-white">
                Каждый автор получает требуемые ресурсы для развития собственного проекта
            </div>

            <a class="btn btn-lg btn-primary my-5" href="{{ route('login') }}" role="button">
                <span class="lead">
                    Получить инвестиции
                </span>
            </a>
        </div>
        <div class="col-md-5">
            <div class="card shadow-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true" data-aos-once="false">
                <div class="card-header font-weight-bold lead">
                    Уже нашли инвестиции
                </div>
                <div class="card-body p-0">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($projects as $project)
                            @php ($active = '')
                            @if ($loop->first)
                            @php ($active = 'active')
                            @endif
                            <div class="carousel-item {{ $active }}">
                                <div class="card border-light">
                                    <div class="card-header bg-white">
                                        <img src="{{ Arr::random($faces) }}" class="img-thumbnail rounded-circle float-left mr-3">
                                        <a href="{{ url('project/'.$project->id) }}" class="lead font-weight-bold">
                                            {{ Str::limit($project->name, 25) }}
                                        </a>
                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Сумма инвестиций
                                            <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                                                <?php echo number_format(rand(100000, 10000000), 0, '', ' '); ?>
                                                <i class="fas fa-ruble-sign"></i>
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Интересуются проектом
                                            <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                                                <?php echo number_format(rand(1000, 10000), 0, '', ' '); ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Активность по проекту
                                            <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                                                <?php echo number_format(rand(7, 10), 0, '', ' '); ?>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="card-footer text-muted border-top">
                                        @php (shuffle($faces))
                                        @foreach($faces as $face)
                                        @if($loop->index < 4) <img src="{{ $face }}" class="img-thumbnail rounded-circle">
                                            @endif
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Версия для десктопа  --}}

<div class="jumbotron rounded-0 d-none d-md-block main-banner-bg pb-0 bg-transparent">
    <div class="container-xl py-3">
        <div class="row">
            <div class="col-md-7">
                <h1 class="display-4 font-weight-bold text-white">
                    Ваша идея достойна инвестиций
                </h1>

                <div class="h4 mt-3 text-white font-weight-light" style="line-height: 1.5;">
                    Каждый автор получает требуемые ресурсы для развития собственного проекта
                </div>

                <a class="btn btn-lg btn-primary my-3" href="{{ route('login') }}" role="button">
                    <span class="h4">
                        Получить инвестиции
                    </span>
                </a>
            </div>
            <div class="col-md-5">
                <div class="card shadow-lg" data-aos="fade-down" data-aos-duration="1000" data-aos-mirror="true" data-aos-once="false">
                    <div class="card-header font-weight-bold lead">
                        Уже нашли инвестиции
                    </div>
                    <!-- <div class="card-header font-weight-bold lead d-flex justify-content-between">
                    Уже нашли инвестиции
                    <h4>
                        <span class="badge alert-info px-2 py-1 rounded-sm font-weight-normal">
                            <?php echo number_format(rand(1000, 10000), 0, '', ' '); ?>
                        </span>
                    </h4>
                </div> -->
                    <div class="card-body p-0">
                        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($projects as $project)
                                @php ($active = '')
                                @if ($loop->first)
                                @php ($active = 'active')
                                @endif
                                <div class="carousel-item {{ $active }}">
                                    <div class="card border-light">
                                        <div class="card-header bg-white">
                                            <img src="{{ Arr::random($faces) }}" class="img-thumbnail rounded-circle float-left mr-3">
                                            <a href="{{ url('project/'.$project->id) }}" class="lead font-weight-bold">
                                                {{ Str::limit($project->name, 45) }}
                                            </a>
                                        </div>

                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Сумма инвестиций
                                                <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                                                    <?php echo number_format(rand(100000, 10000000), 0, '', ' '); ?>
                                                    <i class="fas fa-ruble-sign"></i>
                                                </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Интересуются проектом
                                                <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                                                    <?php echo number_format(rand(1000, 10000), 0, '', ' '); ?>
                                                </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Активность по проекту
                                                <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                                                    <?php echo number_format(rand(7, 10), 0, '', ' '); ?>
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="card-footer text-muted border-top">
                                            @php (shuffle($faces))
                                            @foreach($faces as $face)
                                            @if($loop->index < 6) <img src="{{ $face }}" class="img-thumbnail rounded-circle">
                                                @endif
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>