<?php

// Define path to application directory
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('memory_limit', '-1');
date_default_timezone_set('UTC');

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://www.carbest.de.ttshops.de/index.php/rest/V1/integration/admin/token");
curl_setopt($ch, CURLOPT_POST,1);
$userData = array("username" => "webservice", "password" => "raghuveer123");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($userData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-Lenght: " . strlen(json_encode($userData))));
$token = curl_exec($ch);

$file = new SplFileObject("data/newfile.txt");
$line = 0;

while (!$file->eof()) {
	if ($line == 1) {
		$data_title = $file->fgets();
		break;
	}$line++;
}

//$ch = curl_init("https://www.carbest.de.ttshops.de/index.php/rest/V1/orders?searchCriteria[filterGroups][0][filters][0][field]=status&searchCriteria[filterGroups][0][filters][0][value]=Pending&searchCriteria[filterGroups][0][filters][0][condition_type]=eq");
$ch = curl_init("https://www.carbest.de.ttshops.de/index.php/rest/V1/orders?searchCriteria[filter_groups][0][filters][0][field]=updated_at&searchCriteria[filter_groups][0][filters][0][value]=".$data_title."&searchCriteria[filter_groups][0][filters][0][condition_type]=gt");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer " . json_decode($token)));

$result = curl_exec($ch);
$result = json_decode($result, 1);
//echo count($result['items']).'@';
//echo '<pre>';print_r($result); 
 
 
 foreach ($result['items'] AS $_orderlist){
 	//$order_id=$_orderlist['items'][];
     $file_name = $_orderlist['increment_id'].'.csv';     
     $row = array ();
     
    $row_1= array('KOPFDATEN;');
		$row_2= array('Shop-Bestellnummer;Name;Straße;Land;PLZ;ORT;Telefon;E-Mail;Versandart;Zahlungsart;Online-Zahl-ID;Kundennumer;  ;');
		$row_3= array($_orderlist['increment_id'].';'.$_orderlist['customer_firstname'].' '.$_orderlist['customer_lastname'].';'.implode(' ',$_orderlist['billing_address']['street']).';;'.$_orderlist['billing_address']['postcode'].';'.$_orderlist['billing_address']['city'].';'.$_orderlist['billing_address']['telephone'].';'.$_orderlist['customer_email'].';'.$_orderlist['shipping_description'].';'.$_orderlist['payment']['method'].';'.$_orderlist['payment']['entity_id'].';;');
		$row_4= array('AFFILIATE;');
		$row_5= array('Referenz;');
		$row_6= array(';');
		$row_7= array('LIEFERDATEN;');
		$row_8= array('Liefer-Name;Liefer-Straße;Liefer-LAND;Liefer-PLZ;Liefer-ORT;Kontakt-E-Mail;Kontakt-Telefon;Kontakt-Telefax;');
		$row_9= array($_orderlist['extension_attributes']['shipping_assignments'][0]['shipping']['address']['firstname'].' '.$_orderlist['extension_attributes']['shipping_assignments'][0]['shipping']['address']['lastname'].';'.implode(' ',$_orderlist['extension_attributes']['shipping_assignments'][0]['shipping']['address']['street']).';;'.$_orderlist['extension_attributes']['shipping_assignments'][0]['shipping']['address']['postcode'].';'.$_orderlist['extension_attributes']['shipping_assignments'][0]['shipping']['address']['city'].';'.$_orderlist['extension_attributes']['shipping_assignments'][0]['shipping']['address']['email'].';'. $_orderlist['extension_attributes']['shipping_assignments'][0]['shipping']['address']['telephone'].';;');
		$row_10= array('TEXTDATEN;');
		$row_11= array('Zusatzinformationen;');
		$row_12= array('customerNote;');
		$row_13= array('POSTENDATEN;');
		$row_14= array('Artikelnr.;Bezeichnung;Menge;Einzelpreis;');
		$row_15= array('43;'.$_orderlist['extension_attributes']['shipping_assignments'][0]['shipping']['method'].';1,00;'.number_format($_orderlist['extension_attributes']['shipping_assignments'][0]['shipping']['total']['shipping_amount'],2, ',', '.').';');
		
		array_push($row,$row_1);
		array_push($row,$row_2);
		array_push($row,$row_3);
		array_push($row,$row_4);
		array_push($row,$row_5);
		array_push($row,$row_6);
		array_push($row,$row_7);
		array_push($row,$row_8);
		array_push($row,$row_9);
		array_push($row,$row_10);
		array_push($row,$row_11);
		array_push($row,$row_12);
		array_push($row,$row_13);
		array_push($row,$row_14);
		array_push($row,$row_15);
		
		foreach($_orderlist['items'] AS $order){
			$ord = array ($order['sku'].';'.$order['name'].';'.number_format($order['qty_ordered'],2, ',', '.').';'.number_format($order['price'],2, ',', '.').'; ');
			array_push($row,$ord);
		}
		
		
		$row_16= array('FUSSDATEN;');
		$row_17= array('Warenwert;MwSt;Summe;Fachhändler;');
		//$row_18= array('baseTotalQtyOrdered;baseTaxAmount;baseTotalQtyOrdered+baseTaxAmount;;');
		$vatPercentage=19;
		$amountwithoutTax=($_orderlist['grand_total']*100)/(100+$vatPercentage);
		$taxAmount=$_orderlist['grand_total']-$amountwithoutTax;
		$toal=$_orderlist['grand_total'];
		
		$row_18= array(number_format($amountwithoutTax,2, ',', '.').';'.number_format($taxAmount,2, ',', '.').';'.number_format($toal,2, ',', '.').';;');
		array_push($row,$row_16);
		array_push($row,$row_17);
		array_push($row,$row_18);

     $fp = fopen('data/'.$file_name, 'w');
     foreach($row as $line){
     	$newline=array();
     	if(is_array($line)){
     		foreach ($line as $val){
     			fwrite($fp,iconv('UTF-8', 'ISO-8859-1',$val.";"));
     		}
     		fwrite($fp,chr(10));
     	}
     }
     fclose($fp);    
     
     $date = (new DateTime())->setTimeZone(new DateTimeZone('Europe/Malta'))->format('Y-m-d');
     $myfile = fopen("data/newfile.txt", "w") or die("Unable to open file!");
     $txt = "Mickey Mouse\n";
     fwrite($myfile, $date);
     fclose($myfile);
 }

exit;
?>
