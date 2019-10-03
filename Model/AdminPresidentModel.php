<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddUserModel
 *
 * @author HP
 */
class AdminPresidentModel {
    
    
    
       public function upgrade_member_role($user_id,$upgrade_id){
        
       $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "CALL upgradeUser($user_id,$upgrade_id);";
        
         try {
            
             $result = mysqli_query($con, $sql);
             
            if($result){
                
                 return TRUE;
            }
            
        } catch (Exception $exc) {
            return FALSE;
        }
    }
    
   public function get_member_role(){
        
          
          $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
     
        
         $sql="CALL getUserRoles();"; 
       try {
            
            
            return mysqli_query($con, $sql);
            
        } catch (Exception $exc) {
            return FALSE;
       }
    }
    
        public function activate_member($member_id){
        
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "CALL activateUser($member_id);";
        
         try {
            
             $result = mysqli_query($con, $sql);
             
            if($result){
                
                 return TRUE;
            }
            
        } catch (Exception $exc) {
            return FALSE;
        }
    }
    
            public function deactivate_member($member_id){
        
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "CALL deactivateUser($member_id);";
        
         try {
            
             $result = mysqli_query($con, $sql);
             
            if($result){
                
                 return TRUE;
            }
            
        } catch (Exception $exc) {
            return FALSE;
        }
    }
    
    
          public function get_all_activated_users(){
        
          $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        // = "SELECT DISTINCT m.`id`,m.`fname`,m.`lname`,m.`oname`,g.`gender`,ms.`status`, m.`spouse_name`,m.`snetwork_name`,d.`department`,mt.`type` AS member_type,r.religon,m.`generation`,m.`email`,m.`phone`,m.`telephone`,m.nationality_id AS nationality,m.`date_of_birth`,m.`spiritual_dob`,m.`profile_photo`,m.`date_joined`, ad.`address_one`,ad.`address_two`,ad.`postal_code`, rg.`region`,ct.`name` as country,sp.`name` as province, cy.`name` as city FROM members m, gender g, marital_status ms, country c, member_type mt, religion r, department d, address ad, region rg,country ct, stste_province sp,city cy WHERE m.gender_id=g.id AND m.marital_status_id=ms.id  AND m.member_type_id=mt.id AND m.religion_id=r.id AND m.department_id = d.id AND ad.regon_id=rg.id AND ad.country_id=ct.contry_id AND ad.state_province_id=sp.id AND ad.city_id=cy.city_id";
       //$sql = "SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone  FROM members m, gender g WHERE m.gender_id = g.id";
       $sql="CALL getAllActivatedUsers()"; 
       try {
            
            
            return mysqli_query($con, $sql);
            
        } catch (Exception $exc) {
            return FALSE;
       }
       
        }
         public function get_all_deactivated_users(){
        
          $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        // = "SELECT DISTINCT m.`id`,m.`fname`,m.`lname`,m.`oname`,g.`gender`,ms.`status`, m.`spouse_name`,m.`snetwork_name`,d.`department`,mt.`type` AS member_type,r.religon,m.`generation`,m.`email`,m.`phone`,m.`telephone`,m.nationality_id AS nationality,m.`date_of_birth`,m.`spiritual_dob`,m.`profile_photo`,m.`date_joined`, ad.`address_one`,ad.`address_two`,ad.`postal_code`, rg.`region`,ct.`name` as country,sp.`name` as province, cy.`name` as city FROM members m, gender g, marital_status ms, country c, member_type mt, religion r, department d, address ad, region rg,country ct, stste_province sp,city cy WHERE m.gender_id=g.id AND m.marital_status_id=ms.id  AND m.member_type_id=mt.id AND m.religion_id=r.id AND m.department_id = d.id AND ad.regon_id=rg.id AND ad.country_id=ct.contry_id AND ad.state_province_id=sp.id AND ad.city_id=cy.city_id";
       //$sql = "SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone  FROM members m, gender g WHERE m.gender_id = g.id";
       $sql="CALL getAllDeactivatedUsers()"; 
       try {
            
            
            return mysqli_query($con, $sql);
            
        } catch (Exception $exc) {
            return FALSE;
       }
       
        }
    
       public function get_all_users(){
        
          $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        // = "SELECT DISTINCT m.`id`,m.`fname`,m.`lname`,m.`oname`,g.`gender`,ms.`status`, m.`spouse_name`,m.`snetwork_name`,d.`department`,mt.`type` AS member_type,r.religon,m.`generation`,m.`email`,m.`phone`,m.`telephone`,m.nationality_id AS nationality,m.`date_of_birth`,m.`spiritual_dob`,m.`profile_photo`,m.`date_joined`, ad.`address_one`,ad.`address_two`,ad.`postal_code`, rg.`region`,ct.`name` as country,sp.`name` as province, cy.`name` as city FROM members m, gender g, marital_status ms, country c, member_type mt, religion r, department d, address ad, region rg,country ct, stste_province sp,city cy WHERE m.gender_id=g.id AND m.marital_status_id=ms.id  AND m.member_type_id=mt.id AND m.religion_id=r.id AND m.department_id = d.id AND ad.regon_id=rg.id AND ad.country_id=ct.contry_id AND ad.state_province_id=sp.id AND ad.city_id=cy.city_id";
       //$sql = "SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone  FROM members m, gender g WHERE m.gender_id = g.id";
       $sql="CALL getAllUsers()"; 
       try {
            
            
            return mysqli_query($con, $sql);
            
        } catch (Exception $exc) {
            return FALSE;
       }
       
        }
    
    public function delet_member($member_id){
        
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "CALL deletMember($member_id);";
        
         try {
            
             $result = mysqli_query($con, $sql);
             
            if($result){
                
                 return TRUE;
            }
            
        } catch (Exception $exc) {
            return FALSE;
        }
    }


    
        public function get_certification_details($_members_id) {
        
        $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "CALL getMembersCirtifications($_members_id);";
        
         try {
            
             $result = mysqli_query($con, $sql);
             
            return $result; 
            
        } catch (Exception $exc) {
            return FALSE;
        }
        
    }
        
    public function get_education_details($_members_id) {
        
        $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "CALL getEducationDetails($_members_id);";
        
         try {
            
             $result = mysqli_query($con, $sql);
             
            return $result; 
            
        } catch (Exception $exc) {
            return FALSE;
        }
        
    }
    
    public function get_careea_ocupation($_members_id) {
        
        $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "CALL getMemberCareeaOcupation($_members_id);";
        
         try {
            
             $result = mysqli_query($con, $sql);
             
            return $result; 
            
        } catch (Exception $exc) {
            return FALSE;
        }
        
    }


    public function getmember_details($member_id){
        $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "CALL getMemeberDetails($member_id);";
        
         try {
            
             $result = mysqli_query($con, $sql);
             
            return $result; 
            
        } catch (Exception $exc) {
            return FALSE;
        }
        
    }
 
    public function get_marital_status(){
        $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "select `id`, `status` from marital_status";
        try {
            
            
            return mysqli_query($con, $sql);
            
        } catch (Exception $exc) {
            return FALSE;
        }
            
        
       
        
    }
    
    
    public function get_members(){
        
          $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        // = "SELECT DISTINCT m.`id`,m.`fname`,m.`lname`,m.`oname`,g.`gender`,ms.`status`, m.`spouse_name`,m.`snetwork_name`,d.`department`,mt.`type` AS member_type,r.religon,m.`generation`,m.`email`,m.`phone`,m.`telephone`,m.nationality_id AS nationality,m.`date_of_birth`,m.`spiritual_dob`,m.`profile_photo`,m.`date_joined`, ad.`address_one`,ad.`address_two`,ad.`postal_code`, rg.`region`,ct.`name` as country,sp.`name` as province, cy.`name` as city FROM members m, gender g, marital_status ms, country c, member_type mt, religion r, department d, address ad, region rg,country ct, stste_province sp,city cy WHERE m.gender_id=g.id AND m.marital_status_id=ms.id  AND m.member_type_id=mt.id AND m.religion_id=r.id AND m.department_id = d.id AND ad.regon_id=rg.id AND ad.country_id=ct.contry_id AND ad.state_province_id=sp.id AND ad.city_id=cy.city_id";
       //$sql = "SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone  FROM members m, gender g WHERE m.gender_id = g.id";
       $sql="CALL getMembers()"; 
       try {
            
            
            return mysqli_query($con, $sql);
            
        } catch (Exception $exc) {
            return FALSE;
        }
            
        
    }
    public function get_member_id($identification_nrc,$identification_pass){
        $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        $sql ="SELECT m.id FROM members m WHERE m.nrc = '$identification_nrc' OR m.passport='$identification_pass'";
        
       $result =  mysqli_query($con, $sql);
       $row = mysqli_fetch_array($result);
       
       return $row['id'];
       
        
    }
    public function add_occupaton_carrea($details){
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
         $getID = new AdminPresidentModel();
         $member_id = $getID->get_member_id($details->nrc,$details->passport);
         $id = $member_id;
         
      
         $sql = "INSERT INTO `career_occupation` (`member_id`, `prof_career`, `duration_start`, `duration_end`, `position`, `co_remarks`) VALUES ($id, '$details->prof_career', '$details->duration_start', '$details->duration_end', '$details->position', '$details->co_remarks');";
    
         
            if ($con->query($sql) === TRUE) {

            $con->close();
            return TRUE;
            
        } else {
               $con->close();
            return FALSE;
        }
    }
    
    public function add_address($address){
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        $getID = new AdminPresidentModel();
        $member_id = $getID->get_member_id($address->nrc,$address->passport);
        $id = $member_id;
         
      
         $sql = "INSERT INTO `address` (`member_id`, `primery_address`, `secondary_address`, `postal_code`) VALUES ($id, '$address->primery_address', '$address->secondary_address', '$address->postcode');";   
         
            if ($con->query($sql) === TRUE) {

            $con->close();
            return TRUE;
            
        } else {
               $con->close();
            return FALSE;
        }
        
    }

    public function add_education_info($details){
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
         $getID = new AdminPresidentModel();
         $member_id = $getID->get_member_id($details->nrc,$details->passport);
         $id = $member_id;
         
      
         $sql = "INSERT INTO `education` (`member_id`, `duration_start`, `duration_end`, `institutiion_name`, `major`, `edu_remarks`) VALUES ($id, '$details->edu_startDate', '$details->edu_endDate', '$details->institutionName', '$details->major', '$details->educationRemark');";   
         
            if ($con->query($sql) === TRUE) {

            $con->close();
            return TRUE;
            
        } else {
               $con->close();
            return FALSE;
        }
    }
    
    
           public function add_certificationa($details){
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
         $getID = new AdminPresidentModel();
         $member_id = $getID->get_member_id($details->nrc,$details->passport);
         $id = $member_id;
         
      
         $sql = "INSERT INTO `certifications` (`member_id`, `date`, `issued_by`, `qualification_name`, `cert_remarks`) VALUES ($id, '$details->issue_date', '$details->issued_by', '$details->cert_institudion_name', '$details->enucation_remark');";   
         
            if ($con->query($sql) === TRUE) {

            $con->close();
            return TRUE;
            
        } else {
               $con->close();
            return FALSE;
        }
    }
    

        public function add_member($member){
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
       
      
      //   $sql = "INSERT INTO members  (`name`, `surname`, `date_of_birth`, `middle_name`, `social_network_id`, `nationality`, `date_joined`, `phone`, `telephone`, `email`, `spiritual_dob`, `profile_photo`, `name_of_spouse`, `generation`, `marital_status_id`, `member_type_id`, `religion_id`) VALUES('$member->name','$member->surname','$member->date_of_birth','$member->middle_name','$member->social_network_id','$member->nationality','$member->phone','$member->telephone','$member->email','$member->spiritual_dob','$member->profile_photo','$member->name_of_spouse','$member->generation','$member->marital_status_id','$member->member_type_id','$member->religion_id','$member->','$member->gender_id','$member->department_id','$member->family_id','$member->education_id','$member->career_occupation_id','$member->certifications_id','$member->awards_id',);";
        
        $sql = "INSERT INTO `members` (`nrc`, `passport`,`fname`, `lname`, `oname`, `spouse_name`, `snetwork_name`, `generation`, `email`, `phone`, `telephone`, `date_of_birth`, `spiritual_dob`, `profile_photo`, `marital_status_id`, `member_type_id`, `nationality_id`, `religion_id`, `gender_id`, `department_id`) VALUES ('$member->nrc','$member->passport','$member->name', '$member->surname', '$member->middle_name', '$member->name_of_spouse', '$member->social_network_id', '$member->generation', '$member->email', '$member->phone', '$member->telephone', '$member->date_of_birth', '$member->spiritual_dob', '$member->profile_photo','$member->marital_status_id', '$member->member_type_id', '$member->nationality', '$member->religion_id', '$member->gender_id', '$member->department_id');";
        // $sql  = "INSERT INTO `members` (`fname`, `lname`, `oname`, `spouse_name`, `snetwork_name`, `generation`, `email`, `phone`, `telephone`, `date_of_birth`, `spiritual_dob`, `profile_photo`,`address_id`, `marital_status_id`, `member_type_id`, `nationality_id`, `religion_id`, `gender_id`, `department_id` ) VALUES ('$member->name', '$member->surname', '$member->middle_name', '$member->name_of_spouse', '$member->social_network_id', '$member->generation', '$member->email', '$member->phone', '$member->telephone', '$member->date_of_birth', '$member->spiritual_dob', '$member->profile_photo', 28, 2, '$member->nationality', 3);";
       //$sql = "INSERT INTO `members` (`fname`, `lname`, `oname`, `spouse_name`, `snetwork_name`, `generation`, `email`, `phone`, `telephone`, `date_of_birth`, `spiritual_dob`, `profile_photo`, `date_joined`, `address_id`, `marital_status_id`, `member_type_id`, `nationality_id`, `religion_id`, `gender_id`, `department_id`) VALUES ('JK', 'JK', 'KJK', 'JK', 'JK', 'JK', 'JK', '41661', '16', '2018-08-26', '2018-08-26', 'KJHJ', '2018-08-26 18:06:03', 6, 3, 2, 2, 1, 2, 2);";
   
        if ($con->query($sql) === TRUE) {

            $con->close();
            return TRUE;
            
        } else {
            return FALSE;
        }
        
        
    }  
    
    public function add_user($User){
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
 

         $sql = "INSERT INTO users  (`username`, `password`) VALUES('$User->username','$User->password');";
        
        if ($con->query($sql) === TRUE) {

            
            return TRUE;
            
        } else {
            return FALSE;
        }
        
        
    }
}
