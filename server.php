<?php
	echo header('Content-Type: application/json');

	if(isset($_POST['userID']))
	{
		echo json_encode(array("customerID" => "value1",
							   "personalCardNumber" => "value2",
							   "lastOrderDate" => "value3",
							   "registrationDate" => "value4",
							   "customerName" => "XXXXXXXXXXXX",
							   "phonetic" => "XXXXXXXXXXXXXX",
							   "telephoneNumber1" => "999-999-9999",
							   "postalCode" => "999-9999",
							   "streetAddress" => "京都府京都市上京区智恵光院通り芦山寺上る西入る西社町",
							   "municipality" => "01:青葉区",
							   "municipalityPostalCode" => "999-9999",
							   "municipalityAddress" => "Sendai, Miyagi Prefecture, Aoba-ku",
							   "municipalityPhoneNumber" => "999-999-9999",
							   "localGovernmentPersonnel" => "XXXXXXXXXXXX"
							  )
						);
	}




?>