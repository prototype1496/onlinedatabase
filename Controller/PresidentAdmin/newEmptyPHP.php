<?php

//$token = bin2hex(openssl_random_pseudo_bytes(64));
//echo $token;
//$expiry_timestamp = time();
//echo $expiry_timestamp;


function createToken()
{
    $data = bin2hex(openssl_random_pseudo_bytes(32));
    /* Create a part of token using secretKey and other stuff */
    $tokenGeneric = $data; // It can be 'stronger' of course
    
    $token = $tokenGeneric;
    /* Encoding token */
    $hushed_token = hash('sha256',$token );
   
    $urls = array('token'=>'http://'.$_SERVER["SERVER_NAME"].'/OnlineDataBase/View/PasswordRecovery/index.php?reset='.$token,'hushed_token'=>$hushed_token);
  
    return $urls['token'];
}

$tok = createToken();
print_r($tok);