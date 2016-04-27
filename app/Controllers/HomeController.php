<?php

namespace App\Controllers;

use App\Models\Odds as odds;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $old = new odds(6,0,'DECIMAL');
        $this->container->view->getSmarty()->assign('old' , $old->getXmlUrl());

        return $this->container->view->render($response, 'home.tpl');
    }
}
