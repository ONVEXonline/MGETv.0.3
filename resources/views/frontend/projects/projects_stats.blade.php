{{-- Stats block --}}
<div class="card mb-3 shadow-sm d-none d-md-block">
    <div class="card-header font-weight-bold lead">
        Статистика по проектам
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
</div>