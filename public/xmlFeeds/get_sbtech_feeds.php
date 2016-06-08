<?php
if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}
error_reporting(E_ALL);
ini_set('display_errors', 1);


function dowlnload_xmlfile($url, $out_file ){
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


		$url_football ='http://netbetxml.sbtech.com/lines.aspx?branchid=1&eventtype=0&oddsstyle=DECIMAL';
		$out_football ='xml_sbtech_football.xml';

		$url_football_fractional ='http://netbetxml.sbtech.com/lines.aspx?branchid=1&eventtype=0&oddsstyle=FRACTIONAL';
		$out_football_fractional ='xml_sbtech_football_fractional.xml';


		$url_horse ='http://netbetxml.sbtech.com/lines.aspx?branchid=61&eventtype=341&oddsstyle=DECIMAL';
		$out_horse ='xml_sbtech_horse.xml';

dowlnload_xmlfile($url_football, $out_football);
dowlnload_xmlfile($url_football_fractional, $out_football_fractional);
dowlnload_xmlfile($url_horse, $out_horse);

?>
