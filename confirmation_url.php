<?php
		header("Content-Type: application/json");

		$response = '{
				"ResultCode": 0, 
				"ResultDesc": "Confirmation Received Successfully"
		}';

		// DATA
		$mpesaResponse = file_get_contents('php://input');

		// log the response
		$logFile = "PesaResponse.json";

		// write to file
		$log = fopen($logFile, "a");

		fwrite($log, $mpesaResponse);
		fclose($log);
		
		$content = json_decode($mpesaResponse);
		
        $conn = null;


		echo $response;
?>