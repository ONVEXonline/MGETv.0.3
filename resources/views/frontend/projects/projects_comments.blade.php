<div class="card mb-3 shadow-sm">
    <div class="card-header font-weight-bold lead">
        Комментарии
    </div>
    <div class="card-body">
        Вы также можете ознакомиться с <a href="#">последними активностиями по проектам</a>
    </div>
    @foreach ($comments->shuffle() as $comment)
    <div class="card border-0 mb-3 block-bg-invest-lt">
        <div class="card-header rounded-0 bg-transparent border-top">
            <img src="{{ Arr::random($faces) }}" class="img-thumbnail rounded-circle float-left mr-3" width="40">
            <a href="#" class="font-weight-normal text-dark">
                {{ $comment->user->name}}
            </a>
        </div>
        <div class="card-body">
            <div class="card-text text-dark mt-1">
                <blockquote class="blockquote">
                    <footer class="blockquote-footer">
                        <a href="#" class="font-weight-normal text-dark">
                            {{ Str::limit($comment->description, 50) }}
                        </a>
                    </footer>
                </blockquote>
            </div>

            <div class="card-text text-muted mt-1">
                <a href="#" class="font-weight-normal">
                    {{ Str::limit($comment->name, 45) }}
                </a>
            </div>

            <div class="card-text text-muted mt-1 d-flex justify-content-between px-3">
                <small>
                    <i class="fas fa-comment-alt text-muted"></i>
                    <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
                </small>

                <small>
                    <i class="fas fa-thumbs-up text-muted"></i>
                    <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
                </small>
                <small>
                    <i class="fas fa-eye text-muted"></i>
                    <?php echo number_format(rand(10, 200), 0, '', ' '); ?>
                </small>
            </div>
        </div>
    </div>
    @endforeach
</div>