<form>

    <div class="card mb-3 shadow-sm">
        <div class="card-header font-weight-bold lead">
            Статистика
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex align-items-center justify-content-between">
                Все активности за текущий день
                <div class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                    <?php echo number_format(rand(1000, 10000), 0, '', '&nbsp;'); ?>
                </div>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                Коментариев
                <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                    <?php echo number_format(rand(1000, 10000), 0, '', '&nbsp;'); ?>
                </span>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                Изменений в проектах
                <span class="alert-info px-2 py-1 rounded-sm font-weight-normal">
                    <?php echo number_format(rand(1000, 10000), 0, '', '&nbsp;'); ?>
                </span>
            </li>
        </ul>
    </div>

</form>