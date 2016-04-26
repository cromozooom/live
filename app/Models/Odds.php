<?php

namespace App\Models;

class Odds
{
    protected $branchid;
    protected $EventType;
    protected $OddsStyle;

    public function __construct($branchid , $EventType, $OddsStyle)
    {
      $this->branchid = $branchid;
      $this->EventType = $EventType;
      $this->OddsStyle = $OddsStyle;
    }

    public function getXmlUrl(){
      	$url1="http://netbetxml.sbtech.com/lines.aspx?branchid=6&EventType=0&OddsStyle=DECIMAL";
    }
}
