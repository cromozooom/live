<?php

namespace App\Controllers;

use App\Models\Odds as odds;
use App\Models\Brands as brands;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $brand = new brands;
        $brands = $brand->getAllBrands();

        foreach($brands as $i => $value){
          $allBrand[] = $i;
          $product[] = $value;
        }
        $language = $brand->getAllLanguages();


        return $this->container->view->render($response, 'home.tpl',[
          'brand' => $allBrand,
          'products'=>  $product[0],
          'languages'=> $language,
          'brandsWithProducts' => $brands,
        ]);
    }

    public function postIndex($request, $response)
    {

    }
}
