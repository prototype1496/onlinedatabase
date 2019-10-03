<?php
session_start();

if (isset($_POST['username'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


    require_once '../DataBaseConnection/dataBaseConnection.php';
    require_once '../Entities/User.php';
    require_once '../Model/AdminPresidentModel.php';

    $add_user = new AdminPresidentModel();


    if ($add_user->add_user(new User($username, $password))) {
       echo("<SCRIPT LANGUAGE='JavaScript'>
		      
			 location.href='/OnlineDataBase/View/PresidentAdmin/AddUser4.php'; 
      
             </SCRIPT>" );
    } else {
        echo("<SCRIPT LANGUAGE='JavaScript'>
		      window.alert('User Not Added Pleas Retry ');
			 location.href='/OnlineDataBase/View/PresidentAdmin/AddUser5.php'; 
      
             </SCRIPT>" );
    }
}
