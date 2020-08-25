<div class="mt-5 d-none d-md-block">&nbsp;</div>
<!-- D devices begin -->
<div class="text-center h1 font-weight-bold mt-5 d-none d-md-block">
    Сервис и гарантии
</div>
<!-- D devices end -->

<!-- M devices begin -->
<div class="text-center h2 font-weight-bold mt-5 d-block d-md-none">
    Сервис и гарантии
</div>
<!-- M devices begin -->

<div class="row mt-5">
    <div class="col-md-5">
        <div class="card shadow-lg mb-3" data-aos="fade-down" data-aos-duration="1000" data-aos-mirror="true" data-aos-once="false">
            <div class="card-header font-weight-bold lead">
                Статистика системы
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Общее кол-во проектов
                    <h4>
                        <span class="badge alert-info px-2 py-1 rounded-sm font-weight-normal">
                            <?php echo number_format(rand(100, 1000), 0, '', ' '); ?>
                        </span>
                    </h4>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Проекты, которые нашли инвестиции
                    <h4>
                        <span class="badge alert-info px-2 py-1 rounded-sm font-weight-normal">
                            <?php echo number_format(rand(100, 500), 0, '', ' '); ?>
                        </span>
                    </h4>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Общее кол-во потенциальных инвесторов
                    <h4>
                        <span class="badge alert-info px-2 py-1 rounded-sm font-weight-normal">
                            <?php echo number_format(rand(1000, 10000), 0, '', ' '); ?>
                        </span>
                    </h4>
                </li>
            </ul>
            <div class="card-footer text-muted">
                Данные за {{ now()->year }} год
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <!--  -->
        <div class="card border-0 mb-3 bg-transparent">
            <div class="card-body">
                <div class="card-title font-weight-bold lead">
                    Универсальность
                </div>
                <p class="card-text">Типовой набор сведений о проекте для инвестора, без лишних сведений – только важное для развития проекта</p>

                <div class="card-title font-weight-bold lead">
                    Поддержка
                </div>
                <p class="card-text">Помощь от системы в заполнении и продвижении проекта. Советы, экспертиза и обсуждение сообществом</p>

                <div class="card-title font-weight-bold lead">
                    Результат
                </div>
                <p class="card-text">Инвестиции в проекты на условиях доверительности, партнёрства и с соблюдением правовых норм</p>
            </div>
        </div>
        <!--  -->
    </div>
</div>

<!-- D begin -->
<div class="text-center d-none d-md-block">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btn btn-lg btn-primary" href="{{ route('login') }}" role="button">
            <span class="h4">
                Получить инвестиции
            </span>
        </a>
        <a class="btn btn-lg btn-light" href="{{ url('general-info/kak-eto-rabotaet') }}" role="button">
            <span class="h4">
                Как работает сервис
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
        <a class="btn btn-light" href="{{ url('general-info/kak-eto-rabotaet') }}" role="button">
            <span class="">
                Как работает сервис
            </span>
        </a>
    </div>
</div>

<div class="mt-5 d-none d-md-block">&nbsp;</div>