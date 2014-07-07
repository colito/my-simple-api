<?php
require_once('apicaller.php');

$apicaller = new ApiCaller('http://localhost/emp/myapi/');

$params = array();
$params['name'] = 'Pride';
$params['surname'] = 'Mokhele';
$params['number'] = '082 774 2895';

$api_call = json_decode($apicaller->curl_post_async2($params));
var_dump($api_call);
var_dump($api_call->data);
var_dump($api_call->success);