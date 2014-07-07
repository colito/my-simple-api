<?php
require_once('apicaller.php');

$apicaller = new ApiCaller('http://localhost/emp/myapi/');

$params = array();
$params['name'] = 'Pride';
$params['surname'] = 'Mokhele';
$params['number'] = '082 774 2895';

$api_call = $apicaller->sendRequest($params);

echo $api_call;