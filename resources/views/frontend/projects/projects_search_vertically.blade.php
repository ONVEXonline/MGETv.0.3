<form>

    <div class="card mb-3 shadow-sm">
        <div class="card-header font-weight-bold lead">
            Поиск по проектам
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Найдено проектов
                <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                    {{ number_format($projectsCount, 0, '', '&nbsp;') }}
                </span>
            </li>
        </ul>
        <div class="card-body">
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Все отрасли</option>
                    <option>Человек и общество</option>
                    <option>Образование</option>
                    <option>Здоровье</option>
                    <option>Энергетика</option>
                    <option>Расчёты и платежи</option>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Все стадии</option>
                    <option>Человек и общество</option>
                    <option>Образование</option>
                    <option>Здоровье</option>
                    <option>Энергетика</option>
                    <option>Расчёты и платежи</option>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Все типы проектов</option>
                    <option>Человек и общество</option>
                    <option>Образование</option>
                    <option>Здоровье</option>
                    <option>Энергетика</option>
                    <option>Расчёты и платежи</option>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Все регионы</option>
                    <option>Человек и общество</option>
                    <option>Образование</option>
                    <option>Здоровье</option>
                    <option>Энергетика</option>
                    <option>Расчёты и платежи</option>
                </select>
            </div>

            <div class="card-title font-weight-bold">
                Запрос от авторов проектов
            </div>
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Все запросы</option>
                    <option>Требуется помощь</option>
                    <option>Требуется обучение</option>
                    <option>Требуется обсуждение</option>
                    <option>Требуется экспертиза</option>
                </select>
            </div>

            <div class="card-title font-weight-bold">
                Искать по автору или названию проекта
            </div>
            <div class="form-group">
                <!-- <label for="exampleInputPassword1">Что-то еще</label> -->
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="card-title font-weight-bold">
                Сортировать результаты
            </div>
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Все активности</option>
                    <option>Недавно активные</option>
                    <option>Совсем не активные</option>
                    <option>Заброшенные</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Все стадии</option>
                    <option>Готовы</option>
                    <option>Неготовы</option>
                </select>
            </div>
        </div>

        <div class="card-footer text-center bg-white">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="#" role="button">
                    <span class="">
                        Искать
                    </span>
                </a>
                <a class="btn btn-light" href="#" role="button">
                    <span class="">
                        Очистить
                    </span>
                </a>
            </div>
        </div>
    </div>

</form>