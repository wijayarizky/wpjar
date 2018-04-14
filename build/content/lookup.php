<?php
require "autoload.php";
use JsonWhois\Adapter\Domain\Whois as DomainWhois;
# set key for demo
define('JSONWHOISIO_PRIV_KEY', 'MiXB5sY6U8W4QSq5h1aeMIqWDF7lCtGR');
# set to true to ignore TLS errors (use only for testing)
//define('JSONWHOISIO_IGNORE_CA', true);
# domain for which to query the WHOIS API
$domain = $_POST['domain'];
# Create a new instance of DomainWhois
# This is not required with each call, only the first
$DomainWhois = new DomainWhois(JSONWHOISIO_PRIV_KEY);
# set the domain for the query
$DomainWhois->setPayload($domain);
# Perform the query and store the resulting object 
$Result = $DomainWhois->run();
# check for successful execution
if (!$Result->isSuccessful()) {
	# query failed, print the reason
	echo 'Lookup failed (' . $Result->getStatusCode() . '): ' . $Result->getStatusMessage();
} else {
	echo '<h1>RESULT : '.$domain.'</h1>';
	echo 'Domain Name : '.$Result->name.'<br>';
	echo 'Created On : '.$Result->created.'<br>';
	echo 'Last Update On : '.$Result->changed.'<br>';
	echo 'Expiry Date : '.$Result->expires.'<br>';
	$jumstatus = count($Result->status);
	if($jumstatus>1){
		for($i=0; $i<$jumstatus; $i++){
			echo 'Status : '.$Result->status[$i].'<br>';
		}
	}else{
		echo 'Status : '.$Result->status.'<br>';
	}
	echo 'Registrant Name : '.$Result->contacts->owner[0]->name.'<br>';
	echo 'Registrant Organization : '.$Result->contacts->owner[0]->organization.'<br>';
	echo 'Registrant Address : '.$Result->contacts->owner[0]->address.'<br>';
	echo 'Registrant City : '.$Result->contacts->owner[0]->city.'<br>';
	echo 'Registrant State/Province : '.$Result->contacts->owner[0]->state.'<br>';
	echo 'Registrant Postal Code : '.$Result->contacts->owner[0]->zipcode.'<br>';
	echo 'Registrant Country : '.$Result->contacts->owner[0]->country.'<br>';
	echo 'Registrant Phone : '.$Result->contacts->owner[0]->phone.'<br>';
	echo 'Registrant Fax : '.$Result->contacts->owner[0]->fax.'<br>';
	echo 'Registrant Email : '.$Result->contacts->owner[0]->email.'<br>';
	
	# get the result of the successful query as an array (default) 
	//echo '<br>';
	//$dataArray = $Result->getDataArray();
	
	//echo 'Expiry date (array): ' . $dataArray['expires'] . '<br>';
	//$dataObject = $Result->getDataObject();
	
	//echo 'Expiry date (object): ' . $dataObject->expires . '<br>';
	//echo 'Expiry date (direct from $Result): ' . $Result->expires . '<br>';
	//echo 'Owner Email (direct from $Result): ' . $Result->contacts->owner[0]->email . '<br>';
	//echo 'Owner Email (array): ' . $dataArray['contacts']['owner'][0]['email'] . '<br>';
	//echo '<br>';
	//return print_r($dataArray);
}