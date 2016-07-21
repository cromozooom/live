<?php

// Define named route
$app->get('/', 'HomeController:index')->setName('home');
$app->post('/', 'HomeController:postIndex')->setName('home');

$app->get('/live-odds/{brand}/{sportType}/{lang}/{template}/{option}/', 'LiveOddsController:index')->setName('liveodds');

$app->get('/live-odds/{brand}/{sportType}/{lang}/{template}/{option}/bydate/', 'LiveOddsController:odds_by_Date')->setName('odds-bydate');
