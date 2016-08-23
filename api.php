<?php
/*
PHP REQUEST MANAGER.
This file contains the code for management the petitions and get the correct info from the request.
*/

//VARIABLE
$service_position = 1;
$operation_position = 2;
//HTTP METHOD
$method = $_SERVER['REQUEST_METHOD'];
//PATH
$request = explode('/', trim($_SERVER['PATH_INFO']));
//BODY REQUEST
//NOTE: THE JSON NEEDS "" IN THE KEYS AND VALUES.
$input = utf8_encode(file_get_contents('php://input'));
$data = json_decode($input, true);
//GET THE SERVICE NAME
$service= $request[$service_position];
//GET THE OPERATION IN THE REQUEST (INSERT, UPDATE, DELETE)
$operation = null;
if (count($request) > 2 ){
  $operation = $request[$operation_position];
}
?>
