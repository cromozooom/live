<?php

namespace App\Controllers;

use App\Models\Odds as odds;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $old = new odds(6,0,'DECIMAL');
        $brand = array('betfirst', 'netbet');

        $this->container->view->getSmarty()->assign('old');
        $this->container->view->getSmarty()->assign('brand', $brand);
        return $this->container->view->render($response, 'home.tpl');
    }
}
