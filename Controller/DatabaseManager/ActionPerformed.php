<?php
//require_once '../../Model/AdminPresidentModel.php';
require_once '../../Model/DatabaseAdminModel.php';
require_once '../../DataBaseConnection/dataBaseConnection.php';
//$memeber  = new AdminPresidentModel();
$database_manager_model  = new DatabaseAdminModel();
    


if (isset($_POST['view'])) {
    
    $id = strip_tags(trim(filter_input(INPUT_POST, 'view_id', FILTER_SANITIZE_STRING)));
    header("Location: /OnlineDataBase/View/DataBaseManager/viweProfile.php?country=$id");
    
}
else if (isset($_POST['edit'])){
    
    
}
else if(isset($_POST['delet_id'])){
//
//    $id = strip_tags(trim(filter_input(INPUT_POST, 'delet_id', FILTER_SANITIZE_STRING)));
//    
//    $member_details_delted = $memeber->delet_member($id);
//    
//    if($member_details_delted){
//        
//         header("Location: /OnlineDataBase/View/PresidentAdmin/viewMembersList.php");
//    }  else {
//        header("Location: /OnlineDataBase/View/PresidentAdmin/viewMembersList.php");
//    }
   
}else if (isset($_POST['approve'])){
    
     
     $id = strip_tags(trim(filter_input(INPUT_POST, 'approve_id', FILTER_SANITIZE_STRING)));
     
       $member_details_activate = $database_manager_model->approve_member_request($id);
       if($member_details_activate){
            header("Location: /OnlineDataBase/View/DataBaseManager/ApproveMember.php");
   
       }else{
//            put redirecting code here if it fails to perform an action above 
       }
}else if (isset($_POST['approve_rqst'])){
    
     
     $id = strip_tags(trim(filter_input(INPUT_POST, 'approve_id', FILTER_SANITIZE_STRING)));
     
       $member_details_activate = $database_manager_model->approve_member_request($id);
       if($member_details_activate){
            header("Location: /OnlineDataBase/View/DataBaseManager/index.php");
 
       }else{
//            put redirecting code here if it fails to perform an action above 
}

       }
else{
    
    
}
