<div class="card">
    <div class="card-header font-weight-bold lead">
        Как это работает
    </div>
    <div class="card-body">
        <!-- <img src="{{ url('images/shema/howtowork-v3.png') }}"> -->
        <p class="card-text">
            Автор – первый инвестор в собственный проект: вкладывает идеи, труд, деньги. Развитие проекта требует привлечения сторонних ресурсов: финансовых и интеллектуальных. Не тратьте время на поиски инвестора
        </p>

        {{-- Begin 1 --}}
        <div class="row mt-5 d-flex align-items-center">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body bg-secondary text-white d-flex justify-content-start align-items-start">
                        <h4>
                            <span class="badge alert-light px-2 py-1 mr-3 rounded-sm font-weight-normal">
                                1
                            </span>
                        </h4>
                        Простая регистрация - первый шаг к инвестиционному процессу
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        Простая регистрация без технических сложностей
                    </div>
                </div>
            </div>
        </div>
        {{-- End 1 --}}

        {{-- Begin 2 --}}
        <div class="row mt-5 d-flex align-items-center">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body bg-secondary text-white d-flex justify-content-start align-items-start">
                        <h4>
                            <span class="badge alert-light px-2 py-1 mr-3 rounded-sm font-weight-normal">
                                2
                            </span>
                        </h4>
                        Автор проекта заполняет и полностью контролируют содержание и уровень доступа
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        MGET помогает рассказать о проекте в понятной для инвестора форме
                    </div>
                </div>
            </div>
        </div>
        {{-- End 2 --}}

        {{-- Begin 3 --}}
        <div class="row mt-5 d-flex align-items-center">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body bg-secondary text-white d-flex justify-content-start align-items-start">
                        <h4>
                            <span class="badge alert-light px-2 py-1 mr-3 rounded-sm font-weight-normal">
                                3
                            </span>
                        </h4>
                        MGET показывает для автора уровень привлекательности проекта и содействует развитию проекта
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        После публикации проекта автором, сообщество обсуждает содержание проекта, продукта и способа его продвижения
                    </div>
                </div>
            </div>
        </div>
        {{-- End 3 --}}

        {{-- Begin 4 --}}
        <div class="row mt-5 d-flex align-items-center">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body bg-secondary text-white d-flex justify-content-start align-items-start">
                        <h4>
                            <span class="badge alert-light px-2 py-1 mr-3 rounded-sm font-weight-normal">
                                4
                            </span>
                        </h4>
                        Активность автора поддерживается инвестициями MGET в проверку гипотез развития проекта
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        MGET анализирует содержание проекта по уровню риска и формирует структурированный пул для инвестиционного сообщества
                    </div>
                </div>
            </div>
        </div>
        {{-- End 4 --}}

        {{-- Begin 5 --}}
        <div class="row mt-5 d-flex align-items-center">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body bg-secondary text-white d-flex justify-content-start align-items-start">
                        <h4>
                            <span class="badge alert-light px-2 py-1 mr-3 rounded-sm font-weight-normal">
                                5
                            </span>
                        </h4>
                        Проект автора развивается как самостоятельная компания
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        Инвесторы напрямую или через MGET владеют долей в проекте
                    </div>
                </div>
            </div>
        </div>
        {{-- End 5 --}}

    </div>
    <div class="card-footer bg-white">
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
</div>