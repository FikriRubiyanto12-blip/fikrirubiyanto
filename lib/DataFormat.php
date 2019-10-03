<?php
class DataFormat{
	function asHTML($data){
		$html .= "<table>";
		foreach($data as $k=>$v){
			if ($k==0){
				$html .="<tr>";
				foreach($v as $key=>$value){
					$html .= "<th>".$key."</th>";
				}
				$html .="</tr>";
			}
			$html .= "<tr>";
			foreach($v as $key=>$value){
				$html .= "<td>".$value."</td>";
			}
			$html .= "</tr>";
		}
		$html .= "</table>";
		return $html;
	}
	
	function asXML($data,$label){
		header('Content-type: application/xml');
		header("Access-Control-Allow-Origin:*");
		$xml =  new DOMDocument();
		$rootElement = $xml->createElement('Data'.$label);
		$xml->appendChild($rootElement);
		foreach($data as $k=>$v){
			$el = $xml->createElement($label);
			$rootElement->appendChild($el);
			foreach($v as $key=>$value){
				$el->appendChild($xml->createElement($key, $value));
			}
		}
		echo $xml->saveXML();
	}
	
	function asJSON($data){
		return json_encode($data);
	}
}