<!-- <div class="mt-5 d-none d-md-block">&nbsp;</div> -->
<!-- D devices begin -->
<div class="text-center h1 font-weight-bold mt-5 d-none d-md-block">
    Приоритет автора проекта
</div>
<!-- D devices end -->

<!-- M devices begin -->
<div class="text-center h2 font-weight-bold mt-5 d-block d-md-none">
    Приоритет автора проекта
</div>
<!-- M devices begin -->

<div class="row mt-5">
    <div class="col-md-7">
        <!--  -->
        <div class="card border-0 mb-3 bg-transparent">
            <div class="card-body">
                <div class="card-title font-weight-bold lead">
                    Без конкурса
                </div>
                <p class="card-text">Авторы самостоятельно устанавливают скорость развития проекта без длительных ожиданий начала отбора и рассмотрения проектов</p>

                <div class="card-title font-weight-bold lead">
                    Все отрасли
                </div>
                <p class="card-text">Принимаются проекты всех отраслей и всех направлений разработок. Преимущественно коммерческие, но также и Автор самостоятельно определяет рубрику</p>

                <div class="card-title font-weight-bold lead">
                    Без оплаты
                </div>
                <p class="card-text">Полностью бесплатно для Автора: обучение на примере собственного проекта, методика коммерциализации, обсуждение, критика и помощь</p>
                <div class="card-title font-weight-bold lead">
                    Без опасности
                </div>
                <p class="card-text">Регулируемый уровень приватности и определение момента публикации проекта или отдельных разделов</p>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card shadow-lg mb-3" data-aos="fade-down" data-aos-duration="1000" data-aos-mirror="true" data-aos-once="false">
            <div class="card-header font-weight-bold lead">
                Наше сообщество
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Частные инвесторы
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(300, 1000), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Профессиональные инвесторы
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(100, 300), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Инвестиционные фонды
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(10, 20), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Эксперты
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Потенциальные клиенты
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(200, 1000), 0, '', ' '); ?>
                    </span>
                </li>
            </ul>
            {{-- Begin Desktop --}}
            <div class="card-footer text-muted d-none d-md-block">
                @php (shuffle($faces))
                @foreach($faces as $face)
                @if($loop->index < 6) <img src="{{ $face }}" class="img-thumbnail rounded-circle mb-1">
                    @endif
                    @endforeach
            </div>
            {{-- End Desktop --}}

            {{-- Begin Mobile --}}
            <div class="card-footer text-muted d-block d-md-none">
                @php (shuffle($faces))
                @foreach($faces as $face)
                @if($loop->index < 4) <img src="{{ $face }}" class="img-thumbnail rounded-circle mb-1">
                    @endif
                    @endforeach
            </div>
            {{-- End Mobile --}}

        </div>
    </div>
</div>

<!-- D begin  -->
<div class="text-center d-none d-md-block">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btn btn-lg btn-primary" href="{{ route('login') }}" role="button">
            <span class="h4">
                Получить инвестиции
            </span>
        </a>
        <a class="btn btn-lg btn-light" href="{{ route('projects') }}" role="button">
            <span class="h4">
                Посмотреть проекты
            </span>
        </a>
    </div>
</div>

<!-- M begin -->
<div class="text-center d-block d-md-none">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btn btn-primary" href="{{ route('login') }}" role="button">
            <span class="">
                Получить инвестиции
            </span>
        </a>
        <a class="btn btn-light" href="{{ route('projects') }}" role="button">
            <span class="">
                Посмотреть проекты
            </span>
        </a>
    </div>
</div>