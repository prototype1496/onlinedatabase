<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LoginModel {

    public function Loauthenticate($user) {

        $getConnection = new Connection();
        $conn = $getConnection->connect();
        $sql = "SELECT * from users WHERE username= '$user->username' AND password='$user->password' AND activated=1; ";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            $userData = $result->fetch_assoc();
            $helper = new LoginModel();
            $helper->redirectUser($userData, $user);
        } else {

            return FALSE;
        }
    }

    public function redirectUser($row, $userObject) {

        $Type = $row['user_role'];

        if ($Type == 1) {
             $_SESSION['username'] = $userObject->username;
            $_SESSION['user_pic'] = $row['acc_pic'];
            $_SESSION['appoinment_date'] = $row['appointed_date'];
            $_SESSION['Type'] = "President";
           

            header("location:/OnlineDataBase/View/PresidentAdmin/index.php");
        }if ($Type == 2) {

            $_SESSION['username'] = $userObject->username;
             $_SESSION['user_pic'] = $row['acc_pic'];
            $_SESSION['Type'] = "Data Base Manager";
             $_SESSION['appoinment_date'] = $row['appointed_date'];

            header("location:/OnlineDataBase/View/DataBaseManager/index.php");
        }
        if ($Type == 3) {

            $_SESSION['username'] = $userObject->username;
             $_SESSION['user_pic'] = $row['acc_pic'];
            $_SESSION['Type'] = "Country National Leaders ";
             $_SESSION['appoinment_date'] = $row['appointed_date'];

            header("location:/OnlineDataBase/View/NationalLeader/index.php");
        }
    }

}
