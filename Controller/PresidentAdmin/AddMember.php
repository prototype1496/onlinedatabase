<?php

session_start();

if (isset($_POST['submit_btn'])) {
  
       
        
   $nrc = strip_tags(trim(filter_input(INPUT_POST, 'nrc', FILTER_SANITIZE_STRING)));
   $passpot = strip_tags(trim(filter_input(INPUT_POST, 'passport', FILTER_SANITIZE_STRING)));
    $name = strip_tags(trim(filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING)));
    $surname = strip_tags(trim(filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING)));
    $date_of_birth = strip_tags(trim(filter_input(INPUT_POST, 'date_of_birth', FILTER_SANITIZE_STRING)));
    $middle_name = strip_tags(trim(filter_input(INPUT_POST, 'oname', FILTER_SANITIZE_STRING)));
    $social_network_id = strip_tags(trim(filter_input(INPUT_POST, 'social_network_id', FILTER_SANITIZE_STRING)));
    $nationality = strip_tags(trim(filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_STRING)));

    $phone = strip_tags(trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING)));
    $telephone = strip_tags(trim(filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING)));
    $email = strip_tags(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));
    $spiritual_dob = strip_tags(trim(filter_input(INPUT_POST, 'spiritual_dob', FILTER_SANITIZE_STRING)));
    $name_of_spouse = strip_tags(trim(filter_input(INPUT_POST, 'name_of_spouse', FILTER_SANITIZE_STRING)));
    $generation = strip_tags(trim(filter_input(INPUT_POST, 'generation', FILTER_SANITIZE_STRING)));
    $marital_status_id = strip_tags(trim(filter_input(INPUT_POST, 'marital_status_id', FILTER_SANITIZE_STRING)));
    $member_type_id = strip_tags(trim(filter_input(INPUT_POST, 'member_type_id', FILTER_SANITIZE_STRING)));
    $religion_id = strip_tags(trim(filter_input(INPUT_POST, 'religion_id', FILTER_SANITIZE_STRING)));
    $gender_id = strip_tags(trim(filter_input(INPUT_POST, 'gender_id', FILTER_SANITIZE_STRING)));
    $department_id = strip_tags(trim(filter_input(INPUT_POST, 'department_id', FILTER_SANITIZE_STRING)));
    $family_id = strip_tags(trim(filter_input(INPUT_POST, 'family_id', FILTER_SANITIZE_STRING)));
    $education_id = strip_tags(trim(filter_input(INPUT_POST, 'education_id', FILTER_SANITIZE_STRING)));
    $career_occupation_id = strip_tags(trim(filter_input(INPUT_POST, 'career_occupation_id', FILTER_SANITIZE_STRING)));
    $certifications_id = strip_tags(trim(filter_input(INPUT_POST, 'certifications_id', FILTER_SANITIZE_STRING)));
    $awards_id = strip_tags(trim(filter_input(INPUT_POST, 'awards_id', FILTER_SANITIZE_STRING)));
    
     require_once '../../DataBaseConnection/dataBaseConnection.php';
     require_once '../../Entities/Member.php';
     require_once '../../Entities/Occupations.php';
      require_once '../../Entities/Adress.php';
     require_once '../../Entities/Certificate.php';
     require_once '../../Entities/Education.php';
     require_once '../../Model/AdminPresidentModel.php';

    $add_user = new AdminPresidentModel();
   //Careea and ocupation section to get details from the arrays 
     $poffetion =  $_POST['proffetion_array'];
    $possition =  $_POST['position_array'];
    $start_date = $_POST['start_array'];
    $end_date = $_POST['end_array'];
    $remarks = $_POST['remarks_array'];
    
    //Education section to get details from the arrays 
    $institiution_name = $_POST['institution_name_array'];
    $major = $_POST['major_array'];
    $education_remarks = $_POST['education_remark_array'];
    $edu_start_date = $_POST['edu_start_array'];
    $edu_end_date = $_POST['edu_end_array'];
    
     //Cirtification section to get details from the arrays 
    
    $issuer_institiution_name = $_POST['issuer_institution_name'];
    $issuer_name = $_POST['isser_name_array'];
    $issued_date = $_POST['issued_date_array'];
    $issuer_remarks = $_POST['essuer_remarks_array'];
    
    
    //Adress Section 
    $primery_address = strip_tags(trim(filter_input(INPUT_POST, 'primeryAddress', FILTER_SANITIZE_STRING)));
    $secondary_address=strip_tags(trim(filter_input(INPUT_POST, 'secondaryAdress', FILTER_SANITIZE_STRING)));
    $postcode=strip_tags(trim(filter_input(INPUT_POST, 'postCode', FILTER_SANITIZE_STRING)));

// This is the section for reciving the profile pic that is being uploaded 
    
    $prfile_pic = $_FILES['profile_pic']['name'];
    $tmp_prfile_pic = $_FILES['profile_pic']['tmp_name'];
    
    $file_sever_path = $prfile_pic;
    $sever_ip= "localhost";
    $folder_server = "OnlineDataBase";
    $image_folder="profile_uploads/";
    $image_folder_path="../../profile_uploads/";
    
    
    $profile_photo = $storage_reffernce=$file_sever_path;
   // echo $primery_address;
    
    move_uploaded_file($tmp_prfile_pic,$image_folder_path.$file_sever_path );
   


    if ($add_user->add_member(new Member($nrc,$passpot,$name, $surname, $date_of_birth, $middle_name, $social_network_id, $nationality, $phone, $telephone, $email, $spiritual_dob, $profile_photo, $name_of_spouse, $generation, $marital_status_id, $member_type_id, $religion_id, $gender_id, $department_id, $family_id, $education_id, $career_occupation_id, $certifications_id, $awards_id))) {
        
   foreach ($poffetion as $key=>$n){
        $_poffetion = strip_tags(trim($n));
        $_possition = strip_tags(trim($possition[$key]));
        $_start_date = strip_tags(trim($start_date[$key]));
        $_end_date = strip_tags(trim($end_date[$key]));
        $_remarks = strip_tags(trim($remarks[$key]));
        
        
       $add_user->add_occupaton_carrea(new Occupations($nrc,$passpot,$_poffetion, $_start_date, $_end_date, $_possition, $_remarks));
       
      
        
    }
    
      foreach ($institiution_name as $key=>$inst_name){
        $_institiution_name = strip_tags(trim($inst_name));
        $_major = strip_tags(trim($major[$key]));
        $_education_remarks = strip_tags(trim($education_remarks[$key]));
        $_edu_start_date = strip_tags(trim($edu_start_date[$key]));
        $_edu_end_date = strip_tags(trim($edu_end_date[$key]));
        
        
       $add_user->add_education_info(new Education($nrc, $passpot, $_institiution_name, $_major, $_education_remarks, $_edu_start_date, $_edu_end_date));
       
      
        
    }
     
    foreach ($issuer_institiution_name as $key=>$_issuer_institut_name){
        $_issuer_institiution_name = strip_tags(trim($_issuer_institut_name));
        $_issuers_name = strip_tags(trim($issuer_name[$key]));
        $_issued_date = strip_tags(trim($issued_date[$key]));
        $_issuer_remarks = strip_tags(trim($issuer_remarks[$key]));
     
        
        
       $add_user->add_certificationa(new Certificate($nrc, $passpot, $_issuer_institiution_name, $_issuers_name, $_issued_date, $_issuer_remarks));
       
      
        
    }
    
    $add_user->add_address(new Adress($nrc, $passpot, $primery_address, $secondary_address, $postcode, '', '', '', ''));
    
   echo("<SCRIPT LANGUAGE='JavaScript'>
		      window.alert('Memeber Added');
			 location.href='/OnlineDataBase/View/PresidentAdmin/index.php'; 
      
             </SCRIPT>" );
    
    
      
    } else {
        echo("<SCRIPT LANGUAGE='JavaScript'>
		      window.alert('Memeber Not Added Pleas Retry ');
			location.href='/OnlineDataBase/View/PresidentAdmin/index.php';
      
             </SCRIPT>" );
    }
} else {
//    echo'Erro Ocured';
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
