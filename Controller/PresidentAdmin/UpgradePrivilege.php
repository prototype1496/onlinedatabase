<?php
require_once '../../Model/AdminPresidentModel.php';
require_once '../../DataBaseConnection/dataBaseConnection.php';



if (isset($_POST['upgrade_id'])) {
    $memeber  = new AdminPresidentModel();
    $user_id = strip_tags(trim(filter_input(INPUT_POST, 'upgrade_id', FILTER_SANITIZE_STRING)));
    $member_id = strip_tags(trim(filter_input(INPUT_POST, 'user_role_id', FILTER_SANITIZE_STRING)));
    
    $upgraded  = $memeber->upgrade_member_role($user_id, $member_id);
    
    if($upgraded){
    header("Location: /OnlineDataBase/View/PresidentAdmin/membersPrivalges.php");
    }
    else{}
    
    //header("Location: /OnlineDataBase/View/PresidentAdmin/viweProfile.php?country=$id");
    
}
