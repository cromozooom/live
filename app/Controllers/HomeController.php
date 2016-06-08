<?php

namespace App\Controllers;

use App\Models\Odds as odds;
use App\Models\Brands as brands;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        $brand = new brands;
        $odds = new odds;
        $brands = $brand->getAllBrands();

        $xmlContent = $odds->getXmlUrl();
        var_dump($xmlContent);
        die();
    		$xml1 = $odds->getXmlObject($xmlContent);

        $xml = simplexml_load_string($xml1);

        foreach($brands as $i => $value){
          $allBrand[] = $i;
          $products[] = $value;
        }
        $language = $brand->getAllLanguages();


        return $this->container->view->render($response, 'home.tpl',[
          'brand' => $allBrand,
          'products'=>  $products[0],
          'languages'=> $language,
          'brandsWithProducts' => $brands,
          'xml' => $odds->getXmlUrl(),
        ]);
    }

    public function postIndex($request, $response)
    {
      $brand = new brands;
      $brands = $brand->getAllBrands();

      foreach($brands as $i => $value){
        $allBrand[] = $i;
      }

      $language = $brand->getAllLanguages();
      return $this->container->view->render($response, 'home.tpl',[
        'brand' => $allBrand,
        'products'=>  $brands[$request->getParam('brand')],
        'languages'=> $language,
        'brandsWithProducts' => $brands,
      ]);
    }

    public function getXmlObject($brandId){
      echo $brandId;
    }
}
