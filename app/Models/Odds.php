<?php

namespace App\Models;

class Odds
{
    protected $BranchId;
    protected $EventType;
    protected $OddsStyle;

    public function __construct($branchid , $EventType, $OddsStyle )
    {
      $this->BranchId = $BranchId;
      $this->EventType = $EventType;
      $this->OddsStyle = $OddsStyle;
    }
    public function getBranchId(){
      return $this->BranchId;
    }

    public function geteventType(){
      return $this->EventType;
    }

    public function getOddsStyle(){
      return $this->OddsStyle;
    }
    public function getXmlUrl(){
      	$url="http://netbetxml.sbtech.com/lines.aspx?branchid=".$this->BranchId."&EventType=".$this->EventType."&OddsStyle=".$this->OddsStyle;

        return $url;
    }

    public function getXmlObject(){

      $url = $this->getXmlUrl();
      $ch = curl_init();

  		curl_setopt_array($ch, array(
  		    CURLOPT_URL => $url
  		  , CURLOPT_HEADER => 0
  		  , CURLOPT_RETURNTRANSFER => 1
  		  , CURLOPT_ENCODING => 'gzip'
  		));
  		$xml = curl_exec($ch);
  		//print_r($xml);
  		//die();
  		curl_close($ch);

  		$xmlFeeds = new SimpleXMLElement($xml);

      return $xmlFeeds;
    }
}
