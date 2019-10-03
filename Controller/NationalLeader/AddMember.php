<?php
session_start();

if (isset($_POST['submit_btn'])) {
    
    $marital_status_id = strip_tags(trim(filter_input(INPUT_POST, 'marital_status_id', FILTER_SANITIZE_STRING)));
    echo $marital_status_id;
//    $name = strip_tags(trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING)));
//    $surname =strip_tags(trim( filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING)));
//     $date_of_birth = strip_tags(trim(filter_input(INPUT_POST, 'date_of_birth', FILTER_SANITIZE_STRING)));
//    $middle_name = strip_tags(trim(filter_input(INPUT_POST, 'middle_name', FILTER_SANITIZE_STRING)));
//     $social_network_id = strip_tags(trim(filter_input(INPUT_POST, 'social_network_id', FILTER_SANITIZE_STRING)));
//    $nationality = strip_tags(trim(filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_STRING)));
//     
//    $phone =strip_tags(trim( filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING)));
//     $telephone = strip_tags(trim(filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING)));
//    $email = strip_tags(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));
//     $spiritual_dob = strip_tags(trim(filter_input(INPUT_POST, 'spiritual_dob', FILTER_SANITIZE_STRING)));
//    $profile_photo = strip_tags(trim(filter_input(INPUT_POST, 'profile_photo', FILTER_SANITIZE_STRING)));
//     $name_of_spouse =strip_tags(trim( filter_input(INPUT_POST, 'name_of_spouse', FILTER_SANITIZE_STRING)));
//    $generation = strip_tags(trim(filter_input(INPUT_POST, 'generation', FILTER_SANITIZE_STRING)));
//     $marital_status_id = strip_tags(trim(filter_input(INPUT_POST, 'marital_status_id', FILTER_SANITIZE_STRING)));
//    $member_type_id =strip_tags(trim( filter_input(INPUT_POST, 'member_type_id', FILTER_SANITIZE_STRING)));
//     $religion_id = strip_tags(trim(filter_input(INPUT_POST, 'religion_id', FILTER_SANITIZE_STRING)));
//    $gender_id = strip_tags(trim(filter_input(INPUT_POST, 'gender_id', FILTER_SANITIZE_STRING)));
//    $department_id = strip_tags(trim(filter_input(INPUT_POST, 'department_id', FILTER_SANITIZE_STRING)));
//    $family_id = strip_tags(trim(filter_input(INPUT_POST, 'family_id', FILTER_SANITIZE_STRING)));
//   $education_id = strip_tags(trim(filter_input(INPUT_POST, 'education_id', FILTER_SANITIZE_STRING)));
//   $career_occupation_id = strip_tags(trim(filter_input(INPUT_POST, 'career_occupation_id', FILTER_SANITIZE_STRING)));
//   $certifications_id = strip_tags(trim(filter_input(INPUT_POST, 'certifications_id', FILTER_SANITIZE_STRING)));
//   $awards_id = strip_tags(trim(filter_input(INPUT_POST, 'awards_id', FILTER_SANITIZE_STRING)));
//  
//        require_once '../../DataBaseConnection/dataBaseConnection.php';
//    require_once '../../Entities/Member.php';
//    require_once '../../Model/AdminPresidentModel.php';
//
//    $add_user = new AdminPresidentModel();
//
//
//    if ($add_user->add_member(new Member($name,$surname,$date_of_birth,$middle_name,$social_network_id,$nationality,$phone,$telephone,$spiritual_dob,$profile_photo,$profile_photo,$name_of_spouse,$name_of_spouse,$generation,$marital_status_id,$marital_status_id,$member_type_id,$religion_id,$gender_id,$department_id,$family_id,$education_id,$career_occupation_id,$certifications_id,$awards_id))) {
//       echo("<SCRIPT LANGUAGE='JavaScript'>
//		      
//			 location.href='/OnlineDataBase/View/PresidentAdmin/AdminPresident.php'; 
//      
//             </SCRIPT>" );
//    } else {
//        echo("<SCRIPT LANGUAGE='JavaScript'>
//		      window.alert('Memeber Not Added Pleas Retry ');
//			location.href='/OnlineDataBase/View/PresidentAdmin/AdminPresident.php';
//      
//             </SCRIPT>" );
//    }  


   
}else{
    echo'Erro Ocured';
//     require_once '../../DataBaseConnection/dataBaseConnection.php';
//    require_once '../../Entities/Member.php';
//    require_once '../../Model/AdminPresidentModel.php';
//
//    $add_user = new AdminPresidentModel();
//
//    $the="";
//    if ($add_user->add_member($the)) {
//       echo("<SCRIPT LANGUAGE='JavaScript'>
//		      
//			 location.href='/OnlineDataBase/View/PresidentAdmin/AdminPresident.php'; 
//      
//             </SCRIPT>" );
//    } else {
//        echo("<SCRIPT LANGUAGE='JavaScript'>
//		      window.alert('Memeber Not Added Pleas Retry ');
//			location.href='/OnlineDataBase/View/PresidentAdmin/AdminPresident.php';
//      
//             </SCRIPT>" );
//    }
}
