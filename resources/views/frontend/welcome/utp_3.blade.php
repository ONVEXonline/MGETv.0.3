<div class="mt-5 d-none d-md-block">&nbsp;</div>
<!-- D devices begin -->
<div class="text-center h1 font-weight-bold mt-5 d-none d-md-block">
    Инвестиционное сообщество
</div>
<!-- D devices end -->

<!-- M devices begin -->
<div class="text-center h2 font-weight-bold mt-5 d-block d-md-none">
    Инвестиционное сообщество
</div>
<!-- M devices begin -->

<div class="row mt-5">
    <div class="col-md-5">
        <div class="card shadow-lg mb-3" data-aos="fade-down" data-aos-duration="1000" data-aos-mirror="true" data-aos-once="false">
            <div class="card-header font-weight-bold lead">
                Информация по каталогу проектов
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#">
                        Человек и общество
                    </a>
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#">
                        Образование
                    </a>
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#">
                        Здоровье
                    </a>
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#">
                        Спорт и фитнес
                    </a>
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#">
                        Энергетика
                    </a>
                    <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-7">
        <!--  -->
        <div class="card border-0 mb-3 bg-transparent">
            <div class="card-body">
                <div class="card-title font-weight-bold lead">
                    Обсуждение содержания и полноты информации о проекте
                </div>
                <p class="card-text">Унифицированная форма, с общепринятыми типовыми показателями проекта, заполненная автором проекта</p>

                <div class="card-title font-weight-bold lead">
                    Отслеживание динамики изменения показателей
                </div>
                <p class="card-text">Процесс развития проекта в направлении комерциализации на основе показателей и метрик проекта изменяющихся во времени</p>

                <div class="card-title font-weight-bold lead">
                    Коллективные и частные инвестиции в проекты
                </div>
                <p class="card-text">Разделение рисков с другими участниками либо индивидуальные прямые инвестиции в проект</p>
            </div>
        </div>
        <!--  -->
    </div>
</div>

<!-- D begin -->
<div class="text-center d-none d-md-block">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btn btn-lg btn-primary" href="{{ route('projects') }}" role="button">
            <span class="h4">
                Смотреть проекты
            </span>
        </a>
        <a class="btn btn-lg btn-light" href="{{ route('activities') }}" role="button">
            <span class="h4">
                Читать новости проектов
            </span>
        </a>
    </div>
</div>

<!-- M begin -->
<div class="text-center d-block d-md-none">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btn btn-primary" href="{{ route('projects') }}" role="button">
            <span class="">
                Смотреть проекты
            </span>
        </a>
        <a class="btn btn-light" href="{{ route('activities') }}" role="button">
            <span class="">
                Читать новости проектов
            </span>
        </a>
    </div>
</div>