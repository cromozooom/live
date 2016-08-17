<?php

namespace App\Controllers;

class StyleGuideController extends Controller
{
    public function index($request, $response)
    {
        return $this->container->view->render($response, 'pages/styleguide/home.tpl');
    }
}
