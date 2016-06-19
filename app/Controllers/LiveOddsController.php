<?php

namespace App\Controllers;

use App\Models\Odds as odds;
use App\Models\Brands as brands;

class LiveOddsController extends Controller
{
    public function index($request, $response)
    {
      $brand = new brands;
      $odds = new odds;
      $brands = $brand->getAllBrands();

      $sportType = $request->getAttribute('sportType');
      $xmlFile = $odds->getSportTypeFile($sportType);
      $xml = simplexml_load_file($xmlFile);
      $matchId = $request->getParams('MEID');

      foreach ($xml as $value) {
        foreach ($matchId['MEID'] as $meId) {
          if ($value['MEID'] == $meId ) {
              $xmlFeeds[] = $value;
          }
        }
      }
      if (empty($xmlFeeds)) {
        $xmlFeeds = $xml;
      }


      $brand = $request->getAttribute('brand');
      $sportType = $request->getAttribute('sportType');


      $template = 'brand/'.$brand.'/template.tpl';
      return $this->container->view->render($response, $template,[
        'xmlFeeds'=> $xmlFeeds
      ]);
    }

}
