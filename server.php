<?php
	echo header('Content-Type: application/json');

	if(isset($_POST['userID']) && $_POST['module'] == 'customerInformation' )
	{
		$sampleVar = "test value";
		$sampleVar = "test value";
		echo json_encode(array("customerID" => "123456",
							   "personalCardNumber" => "123456",
							   "lastOrderDate" => "2015/11/01",
							   "registrationDate" => "2015/11/01",
							   "customerName" => "XXXXXXXXXXXX",
							   "phonetic" => "XXXXXXXXXXXXXX",
							   "telephoneNumber1" => "999-999-9999",
							   "postalCode" => "999-9999",
							   "streetAddress" => "京都府京都市上京区智恵光院通り芦山寺上る西入る西社町",
							   "municipality" => "01:青葉区",
							   "municipalityPostalCode" => "999-9999",
							   "municipalityAddress" => "Sendai, Miyagi Prefecture, Aoba-ku-YU-HOOOOOO",
							   "municipalityPhoneNumber" => "999-999-9999",
							   "localGovernmentPersonnel" => "XXXXXXXXXXXX"
							  )
						);
	}
	
	if(isset($_POST['userID']) && $_POST['module'] == 'ticketsUsedInformation')
	{
		$sampleVar = "test value";
		$sampleVar = "test value";
		echo json_encode(array(array("orderID" => 12345677, 
									 "orderDate" => "9999/99/99",
									 "paymentType" => "郵便振替",
									 "balanceType" => "後日清算",
									 "deliveryDate" => "2015/12/05",
									 "amountFromGovernment" => "123456",
									 "productSend" => "未確認"
									),
							   array("orderID" => 12345678, 
									 "orderDate" => "9999/99/99",
									 "paymentType" => "郵便振替",
									 "balanceType" => "後日清算",
									 "deliveryDate" => "2015/12/05",
									 "amountFromGovernment" => "123456",
									 "productSend" => "未確認"
									),
							   array("orderID" => 12345679, 
									 "orderDate" => "9999/99/99",
									 "paymentType" => "郵便振替",
									 "balanceType" => "後日清算",
									 "deliveryDate" => "2015/12/05",
									 "amountFromGovernment" => "123456",
									 "productSend" => "未確認"
									)
							  )
						);
	}

	if(isset($_POST['userID']) && $_POST['module'] == 'benifitTicketsList')
	{
		echo json_encode(array(array("ticketID" => "1",
									 "ticketName" => "8-9月分",
									 "baseAmount" => "8600",
									 "benifitAmount" => "17200",
									 "amountFromGovernment" => "15480",
									 "customerAmount" => "1720",
									 "differenceAmount" => "0",
									 "customerTotalAmount" => "0",
									 "benifitTicketSendDate" => "2015/08/05",
									 "benifitTicketReturnDateFromCustomer" => "2015/08/21",
									 "billingDate" => "2015/10/11",
									 "depositDate" => "2015/10/11"
									),
							   array("ticketID" => "2",
									 "ticketName" => "10-11月分",
									 "baseAmount" => "8600",
									 "benifitAmount" => "17200",
									 "amountFromGovernment" => "15480",
									 "customerAmount" => "1720",
									 "differenceAmount" => "0",
									 "customerTotalAmount" => "0",
									 "benifitTicketSendDate" => "2015/10/09",
									 "benifitTicketReturnDateFromCustomer" => "2015/10/20",
									 "billingDate" => "2015/12/11",
									 "depositDate" => "2015/12/11"
									),
							   array("ticketID" => "3",
									 "ticketName" => "12-1月分",
									 "baseAmount" => "8600",
									 "benifitAmount" => "17200",
									 "amountFromGovernment" => "15480",
									 "customerAmount" => "1720",
									 "differenceAmount" => "0",
									 "customerTotalAmount" => "0",
									 "benifitTicketSendDate" => "2015/01/07",
									 "benifitTicketReturnDateFromCustomer" => "2015/01/15",
									 "billingDate" => "",
									 "depositDate" => ""
									),
							   array("ticketID" => "4",
									 "ticketName" => "2-3月分",
									 "baseAmount" => "8600",
									 "benifitAmount" => "17200",
									 "amountFromGovernment" => "15480",
									 "customerAmount" => "1720",
									 "differenceAmount" => "0",
									 "customerTotalAmount" => "0",
									 "benifitTicketSendDate" => "2015/01/05",
									 "benifitTicketReturnDateFromCustomer" => "2015/02/15",
									 "billingDate" => "",
									 "depositDate" => ""
									)
						));
	}

	if(isset($_POST['userID']) && $_POST['module'] == 'benifitTicketInformation')
	{
		echo json_encode($_POST);
	}

?>