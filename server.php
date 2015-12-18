<?php
	echo header('Content-Type: application/json');

	if(isset($_POST['userID']) && $_POST['module'] == 'customerInformation' )
	{
		echo json_encode(array("customerID" => "123456",
							   "personalCardNumber" => "0123456",
							   "lastOrderDate" => "2015/11/01",
							   "registrationDate" => "2015/11/01",
							   "customerName" => "XXXXXXXXXXXX",
							   "phonetic" => "XXXXXXXXXXXXXX",
							   "telephoneNumber1" => "999-999-9999",
							   "postalCode" => "999-9999",
							   "streetAddress" => "京都府京都市上京区智恵光院通り芦山寺上る西入る西社町",
							   "municipality" => "01:青葉区",
							   "municipalityPostalCode" => "999-9999",
							   "municipalityAddress" => "Sendai, Miyagi Prefecture, Aoba-kuDDDD",
							   "municipalityPhoneNumber" => "999-999-9999",
							   "localGovernmentPersonnel" => "XXXXXXXXXXXX"
							  )
						);
	}

	
	if(isset($_POST['userID']) && $_POST['module'] == 'ticketsUsedInformation')
	{
		echo json_encode(array("successFlag" => "success value from the tickets used information"));
	}
	
?>