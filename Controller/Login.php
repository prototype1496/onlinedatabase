<?php

session_start();

if (isset($_POST['username'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


    require_once '../DataBaseConnection/dataBaseConnection.php';
    require_once '../Entities/User.php';
    require_once '../Model/LoginModel.php';

    $login_model = new LoginModel();


    if ($login_model->Loauthenticate(new User($username, $password))) {
        echo '<script type-"text/javascript"> alert("Login Sucsefull") </script>';
    } else {
        echo("<SCRIPT LANGUAGE='JavaScript'>
		      window.alert('wrong user name or password Please re-enter ');
			 location.href='/OnlineDataBase/index.php';   
             </SCRIPT>" );
    }
}
?>

