<?php

// resources/lang/ru/messages.php

$errors = [
    'error_404_title' => 'Упс... Нет такой страницы',
    'error_404_text' => 'Запрашиваемой страницы :url не найдено на нашем сайте',
];

$mavbar = [
    'login' => 'Вход',
    'registration' => 'Регистрация',
    'action_btn' => 'Зарегистрироваться',
    'how_system_work' => 'Как работает система',
    'information' => 'Информация',
    'information_for_authors' => 'Информация для авторов проекта',
    'information_for_investors' => 'Информация для инвесторов',
    'information_general' => 'Общая информация',
];

$welcome = [
    'welcome_title' => 'Mget - главная страница',
    'welcome_description' => 'Описание главной страницы',

    'welcome_headline_main' => 'Хороший проект достоин инвестиции',
    'welcome_headline_secondary' => 'Авторы находят инвестиции в свои проекты Инвесторы находят проекты для инвестирования',

    'welcome_headline_main_mob' => 'Хороший проект достоин инвестиции',
    'welcome_headline_secondary_mob' => 'Авторы находят инвестиции в свои проекты. Инвесторы находят проекты для инвестирования',


    'welcome_utp1_heder' => '',
    'welcome_utp1_footer' => 'Контролируем процесс выполнения заказа от начала и до конца<br>Мы всегда на связи и помогаем в решении любых спорных вопросов',
     'welcome_utp1_footer_mob' => 'Контролируем процесс выполнения заказа от начала и до конца',

    'welcome_utp1_block1_title' => 'Бесплатно',
    'welcome_utp1_block1_main_text' => 'Бесплатно зарегистрируйтесь в системе как автор проектов либо как инвестор',
    'welcome_utp1_block1_secondary_text' => 'Процедура регистрации простая и занимает не более 2 минут',

    'welcome_utp1_block2_title' => 'Быстро',
    'welcome_utp1_block2_main_text' => 'Заполните необходимый перечень полей для регистрации проекта и начните получать предложения от инвесторов',
    'welcome_utp1_block2_secondary_text' => 'Процедура оформления заказа простая и занимает не более 2 минут',

    'welcome_utp1_block3_title' => 'Выгодно',
    'welcome_utp1_block3_main_text' => 'Бесплатно разместите заказ с описанием вашего проекта',
    'welcome_utp1_block3_secondary_text' => 'Процедура оформления заказа простая и занимает не более 2 минут',
];


return array_merge($errors, $mavbar, $welcome);
