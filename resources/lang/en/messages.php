<?php

// resources/lang/ru/messages.php
$errors = [
    'error_404_title' => 'Oops ... page not found',
    'error_404_text' => 'The requested page :url not found on our site',
];

$mavbar = [
    'login' => 'Login',
    'registration' => 'Registration',
    'action_btn' => 'Register now',
    'how_system_work' => 'How the system works',
    'information' => 'Information',
    'information_for_authors' => 'Information for project authors',
    'information_for_investors' => 'Information for investors',
    'information_general' => 'General information',
];

$welcome = [
    'welcome_title' => 'Mget - home page',
    'welcome_description' => 'Home page description',

    'welcome_headline_main' => 'Good project = investment',
    'welcome_headline_secondary' => 'Authors find investments in their projects <br> Investors find projects for investment',

    'welcome_headline_main_mob' => 'Good project = investment',
    'welcome_headline_secondary_mob' => 'Authors find investments in their projects. Investors find projects for investment',


    'welcome_utp1_heder' => '',
    'welcome_utp1_footer' => 'We control the order fulfillment process from start to finish <br> We are always in touch and help in solving any disputable issues',
     'welcome_utp1_footer_mob' => 'We control the order fulfillment process from start to finish',

    'welcome_utp1_block1_title' => 'Free',
    'welcome_utp1_block1_main_text' => 'Place an order for free with a description of your project',
    'welcome_utp1_block1_secondary_text' => 'The ordering procedure is simple and takes no more than 2 minutes',

    'welcome_utp1_block2_title' => 'Fast',
    'welcome_utp1_block2_main_text' => 'Place an order for free with a description of your project',
    'welcome_utp1_block2_secondary_text' => 'The ordering procedure is simple and takes no more than 2 minutes',

    'welcome_utp1_block3_title' => 'Profitable',
    'welcome_utp1_block3_main_text' => 'Place an order for free with a description of your project',
    'welcome_utp1_block3_secondary_text' => 'The ordering procedure is simple and takes no more than 2 minutes',
];


return array_merge($errors, $mavbar, $welcome);
