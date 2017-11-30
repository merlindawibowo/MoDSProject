<?php
	function json($status, $data) 
	{

	    header('Content-type: application/json');
	    http_response_code($status);
	    $response = json_encode(
	            array(
	                'status' => $status,
	                'result' => $data
	            )
	    );

	    return $response;
	}