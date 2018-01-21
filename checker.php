<?php
$txid = $_POST['txid'];
$reqid = $_POST['reqid'];

//The code below is out of habit of trying to avoid timing attacks
$bad = 0;
if(IsNullOrEmptyString($txid))
	$bad++;
if(IsNullOrEmptyString($reqid))
	$bad++;

if($bad > 0)
{
	//Invalid parameters error (400 Bad Request seems appropriate)
	header("Success: false");
	http_response_code(400);
}


// Function for basic field validation (present and neither empty nor only white space -- shamelessly plugged off StackOverflow
function IsNullOrEmptyString($data) {
    return ( !isset($data) || trim(data) === '' );
}

?>
