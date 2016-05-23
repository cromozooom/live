<?php

// Define named route
$app->get('/', 'HomeController:index')->setName('home');
$app->post('/', 'HomeController:postIndex')->setName('home');
