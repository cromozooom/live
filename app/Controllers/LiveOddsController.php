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
        $league_id = $request->getParams('LeagueID');
        $lang = $request->getAttribute('lang');
        $template = $request->getAttribute('template');

        if (isset($matchId['MEID'])) {
            foreach ($xml as $value) {
                foreach ($matchId['MEID'] as $meId) {
                    if ($value['MEID'] == $meId ) {
                        $xmlFeeds[] = $value;
                    }
                }
            }
        }
        elseif (isset($league_id['LeagueID'])) {
            foreach ($xml as $value) {
                foreach ($league_id['LeagueID'] as $key => $league) {

                    if ($value['LeagueID'] == $league ) {
                    $xmlFeeds[] = $value;
            }
          }
        }
      }

      if (empty($xmlFeeds)) {
        $xmlFeeds = $xml;
      }


      $brand = $request->getAttribute('brand');
      $sportType = $request->getAttribute('sportType');


      $template = 'pages/brand/'.$brand.'/'.$sportType.'/'.$lang.'/'.$template.'/template.tpl';
      return $this->container->view->render($response, $template,[
        'xmlFeeds'=> $xmlFeeds
      ]);
    }

    public function odds_by_date($request, $response){
         $brand = new brands;
        $odds = new odds;
        $brands = $brand->getAllBrands();

        $sportType = $request->getAttribute('sportType');
        $xmlFile = $odds->getSportTypeFile($sportType);
        $xml = simplexml_load_file($xmlFile);
        $lang = $request->getAttribute('lang');
        $template = $request->getAttribute('template');
        $brand = $request->getAttribute('brand');
        $today = time();


        foreach ($xml as $value) {
            foreach($request->getParams() as $ma_id => $ma_date){

                if($ma_id == $value['MEID']){

                    $start_end = explode("end", $ma_date);
                    $end_date = $start_end[1];
                    $start_date = $start_end[0];

                    if($today >= $start_date && $today <= $end_date){
                        $xmlFeeds[] = $value;
                    }
                }
            }
        }

        if (empty($xmlFeeds)) {
            $xmlFeeds = $xml;
        }


        $template = 'pages/brand/'.$brand.'/'.$sportType.'/'.$lang.'/'.$template.'/template.tpl';
        return $this->container->view->render($response, $template,[
        'xmlFeeds'=> $xmlFeeds
      ]);

    }

}
