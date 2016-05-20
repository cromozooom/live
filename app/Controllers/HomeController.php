<?php

namespace App\Controllers;

use App\Models\Odds as odds;
use App\Models\Brands as brands;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $old = new odds(6,0,'DECIMAL');
        $brand = new brands;
        $brands = $brand->getAllBrands();

        $smarty = $this->container->view->getSmarty();

        foreach($brands as $i => $value){
          $allBrand[] = $i;
          $product[] = $value;
        }
        $language = $brand->getAllLanguages();
        foreach($language as  $value){
          $languages[] = $value;
        }

        $smarty->assign('brand', $allBrand);
        $smarty->assign('products', $product[0]);
        $smarty->assign('languages', $languages);
        return $this->container->view->render($response, 'home.tpl');
    }
}
