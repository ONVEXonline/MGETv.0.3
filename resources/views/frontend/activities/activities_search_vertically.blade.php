<form>

    <div class="card mb-3 shadow-sm">
        <div class="card-header font-weight-bold lead">
            Поиск по новостям
        </div>
        @php ($activityCount = false)
        @if($activityCount)
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex align-items-center justify-content-between">
                Все активности за текущий день
                <div class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                    <?php echo number_format(rand(1000, 10000), 0, '', '&nbsp;'); ?>
                </div>
            </li>
        </ul>
        @endif
        <div class="card-body">

            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Тип активности</option>
                    <option>Комментарий</option>
                    <option>Изменения по проекту</option>
                 </select>
            </div>

            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Отрасль</option>
                    <option>Человек и общество</option>
                    <option>Образование</option>
                    <option>Здоровье</option>
                    <option>Энергетика</option>
                    <option>Расчёты и платежи</option>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Стадия</option>
                    <option>Человек и общество</option>
                    <option>Образование</option>
                    <option>Здоровье</option>
                    <option>Энергетика</option>
                    <option>Расчёты и платежи</option>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Тип проекта</option>
                    <option>Человек и общество</option>
                    <option>Образование</option>
                    <option>Здоровье</option>
                    <option>Энергетика</option>
                    <option>Расчёты и платежи</option>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Регион</option>
                    <option>Человек и общество</option>
                    <option>Образование</option>
                    <option>Здоровье</option>
                    <option>Энергетика</option>
                    <option>Расчёты и платежи</option>
                </select>
            </div>

            <div class="card-title font-weight-bold">
                Искать по автору или названию проекта
            </div>
            <div class="form-group">
                <!-- <label for="exampleInputPassword1">Что-то еще</label> -->
                <input type="text" class="form-control" id="exampleInputPassword1">
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