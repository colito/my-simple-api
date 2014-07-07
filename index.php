<?php

    try {

        if(!empty($_REQUEST['enc_request']))
        {
            #get the encrypted request
            $enc_request = $_REQUEST['enc_request'];
            $request = json_decode(urldecode($enc_request));

            #Throws an exception if there is a fault
            validate_request($request);

            $result['data'] = 'Your call to the api using sendRequest() was successful.';
        }
        else
        {
            $person = array();
            $person['name'] = $_REQUEST['name'];
            $person['surname'] = $_REQUEST['surname'];
            $person['number'] = $_REQUEST['number'];

            #Throws an exception if there is a fault
            validate_request($_REQUEST);

            $result['data'] = 'Your call to the api using either of the curl_post_async() functions was successful.';
            $result['extra'] = json_encode($_REQUEST);
        }

        # success of the api call if no exceptions are thrown
        $result['success'] = true;
    }
    catch (Exception $e)
    {
        #catch any exceptions and report the problem
        $result = array();
        $result['success'] = false;
        $result['errormsg'] = $e->getMessage();
    }
    echo json_encode($result);
    exit();

    function validate_request($request, $error_message = 'Request is not valid')
    {
        if($request == false || $request == null)
        {
            throw new Exception($error_message);
        }
    }