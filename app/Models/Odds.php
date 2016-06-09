<?php

namespace App\Models;

class Odds
{
    protected $BranchId;
    protected $EventType;
    protected $OddsStyle;
    protected $sportType = ["Soccer" => 1];

    public function __construct($BranchId = 0, $EventType = 0, $OddsStyle = 'DECIMAL')
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
      // FIXME:0 Make $url display notthing when empty
        $BranchIdText = "&BranchID=".$this->BranchId;
        $EventTypeText = "&EventType=".$this->EventType;
        $OddsStyleText = "&OddsStyle=".$this->OddsStyle;

      	$url="http://netbetxml.sbtech.com/lines.aspx?".$BranchIdText.$EventTypeText.$OddsStyleText;
        return $url;
    }

    public function getXmlObject($xml){
      $ch = curl_init();

  		curl_setopt_array($ch, array(
  		    CURLOPT_URL => $xml
  		  , CURLOPT_HEADER => 0
  		  , CURLOPT_RETURNTRANSFER => 1
  		  , CURLOPT_ENCODING => 'gzip'
  		));
  		$xmlExec = curl_exec($ch);

      curl_close($ch);
      return $xmlExec;
    }

    public function getXmlFile($url, $out_file){
      $ch = curl_init();
      curl_setopt_array($ch, array(
          CURLOPT_URL => $url
        , CURLOPT_HEADER => 0
        , CURLOPT_RETURNTRANSFER => 1
        , CURLOPT_ENCODING => 'gzip'
      ));
      $xml = curl_exec($ch);

      curl_close($ch);

      //$content = new SimpleXMLElement($xml);
      $content = $xml;

      ob_start();
      print_r($content );
      $output = ob_get_clean();

      $fWrite = fopen($out_file,"w+");
      $wrote = fwrite($fWrite, $output);
      return 0;
    }
}
