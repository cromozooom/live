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

        $sportType = array_keys($odds->getSportType());

        $products = array_values(($brands));
        $allBrand = array_keys($brands);
        $language = $brand->getAllLanguages();

        return $this->container->view->render($response, 'home.tpl',[
          'brand' => $allBrand,
          'products'=>  $products[0],
          'languages'=> $language,
          'brandsWithProducts' => $brands,
          'sportType' => $sportType
        ]);
    }

    public function postIndex($request, $response)
    {
      $brand = new brands;
      $odds = new odds;
      $brands = $brand->getAllBrands();

      $sportType = array_keys($odds->getSportType());
      $sportTypeId = $request->getParam('sportType');

      $xmlFile = $odds->getSportTypeFile($sportTypeId);
      $xml = simplexml_load_file($xmlFile);

      $allBrand = array_keys($brands);

      $language = $brand->getAllLanguages();

      return $this->container->view->render($response, 'home.tpl',[
        'brand' => $allBrand,
        'products'=>  $brands[$request->getParam('brand')],
        'languages'=> $language,
        'brandsWithProducts' => $brands,
        'xmlFeeds'=> $xml,
        'sportType' => $sportType
      ]);
    }

    public function getXmlObject($brandId){
      echo $brandId;
    }
}
