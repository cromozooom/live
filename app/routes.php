<?php

// Define named route
$app->get('/', 'HomeController:index')->setName('home');
$app->post('/', 'HomeController:postIndex')->setName('home');

$app->get('/live-odds/{brand}/{sportType}/{lang}/{template}/{option}/', 'LiveOddsController:index')->setName('liveodds');
