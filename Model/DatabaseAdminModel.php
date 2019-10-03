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
class DatabaseAdminModel {
    
    
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
    
      
        public function approve_member_request($member_id){
        
         $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        $sql = "CALL approveUseRequest($member_id);";
        
         try {
            
             $result = mysqli_query($con, $sql);
             
            if($result){
                
                 return TRUE;
            }
            
        } catch (Exception $exc) {
            return FALSE;
        }
    }
    
           public function get_limmit_members_requests(){
        
          $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        // = "SELECT DISTINCT m.`id`,m.`fname`,m.`lname`,m.`oname`,g.`gender`,ms.`status`, m.`spouse_name`,m.`snetwork_name`,d.`department`,mt.`type` AS member_type,r.religon,m.`generation`,m.`email`,m.`phone`,m.`telephone`,m.nationality_id AS nationality,m.`date_of_birth`,m.`spiritual_dob`,m.`profile_photo`,m.`date_joined`, ad.`address_one`,ad.`address_two`,ad.`postal_code`, rg.`region`,ct.`name` as country,sp.`name` as province, cy.`name` as city FROM members m, gender g, marital_status ms, country c, member_type mt, religion r, department d, address ad, region rg,country ct, stste_province sp,city cy WHERE m.gender_id=g.id AND m.marital_status_id=ms.id  AND m.member_type_id=mt.id AND m.religion_id=r.id AND m.department_id = d.id AND ad.regon_id=rg.id AND ad.country_id=ct.contry_id AND ad.state_province_id=sp.id AND ad.city_id=cy.city_id";
       //$sql = "SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone  FROM members m, gender g WHERE m.gender_id = g.id";
       $sql="CALL getLimmitUnApprovedMembers()"; 
       try {
            
            
            return mysqli_query($con, $sql);
            
        } catch (Exception $exc) {
            return FALSE;
        }
            
        
    }
    
        public function get_members_requests(){
        
          $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        // = "SELECT DISTINCT m.`id`,m.`fname`,m.`lname`,m.`oname`,g.`gender`,ms.`status`, m.`spouse_name`,m.`snetwork_name`,d.`department`,mt.`type` AS member_type,r.religon,m.`generation`,m.`email`,m.`phone`,m.`telephone`,m.nationality_id AS nationality,m.`date_of_birth`,m.`spiritual_dob`,m.`profile_photo`,m.`date_joined`, ad.`address_one`,ad.`address_two`,ad.`postal_code`, rg.`region`,ct.`name` as country,sp.`name` as province, cy.`name` as city FROM members m, gender g, marital_status ms, country c, member_type mt, religion r, department d, address ad, region rg,country ct, stste_province sp,city cy WHERE m.gender_id=g.id AND m.marital_status_id=ms.id  AND m.member_type_id=mt.id AND m.religion_id=r.id AND m.department_id = d.id AND ad.regon_id=rg.id AND ad.country_id=ct.contry_id AND ad.state_province_id=sp.id AND ad.city_id=cy.city_id";
       //$sql = "SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone  FROM members m, gender g WHERE m.gender_id = g.id";
       $sql="CALL getUnApprovedMembers()"; 
       try {
            
            
            return mysqli_query($con, $sql);
            
        } catch (Exception $exc) {
            return FALSE;
        }
            
        
    }
    
    
   
         public function get_number_approval_requests(){
        
          $getConnectin = new Connection();                                             
        $con = $getConnectin->connect();
        
        // = "SELECT DISTINCT m.`id`,m.`fname`,m.`lname`,m.`oname`,g.`gender`,ms.`status`, m.`spouse_name`,m.`snetwork_name`,d.`department`,mt.`type` AS member_type,r.religon,m.`generation`,m.`email`,m.`phone`,m.`telephone`,m.nationality_id AS nationality,m.`date_of_birth`,m.`spiritual_dob`,m.`profile_photo`,m.`date_joined`, ad.`address_one`,ad.`address_two`,ad.`postal_code`, rg.`region`,ct.`name` as country,sp.`name` as province, cy.`name` as city FROM members m, gender g, marital_status ms, country c, member_type mt, religion r, department d, address ad, region rg,country ct, stste_province sp,city cy WHERE m.gender_id=g.id AND m.marital_status_id=ms.id  AND m.member_type_id=mt.id AND m.religion_id=r.id AND m.department_id = d.id AND ad.regon_id=rg.id AND ad.country_id=ct.contry_id AND ad.state_province_id=sp.id AND ad.city_id=cy.city_id";
       //$sql = "SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone  FROM members m, gender g WHERE m.gender_id = g.id";
       $sql="CALL getApprovalRequests()"; 
       try {
            
            
           $result = mysqli_query($con, $sql);
            
            $row = mysqli_fetch_array($result);
       
       return $row['requestNumber'];
            
        } catch (Exception $exc) {
            return FALSE;
       }
       
        }
    
      
}
