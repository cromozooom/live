<?php

namespace App\Middleware;
use App\Models\Brands as brands;

  class OldInputMiddleware extends Middleware
  {
    public function __invoke($request, $response, $next)
    {


        $smarty = $this->container->view->getSmarty();
        $_SESSION['old'] = $request->getParams();

        if (!empty($_SESSION['old'])) {
          $smarty->assign('old', $_SESSION['old']);
        }else {
          $smarty->assign('old',  ['brand' =>'' , 'product' => '' ]);
        }


        $response = $next($request, $response);
        return $response;

    }
}
