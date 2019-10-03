<?php

class Member {
    
    public $nrc;
    public $passport;
    public $name;
    public $surname;
    public $date_of_birth;
    public $middle_name;
    public $social_network_id ;
    public $nationality ;
    public $phone;
    public $telephone;
    public $email ;
    public $spiritual_dob;
    public $profile_photo;
    public $name_of_spouse ;
    public $generation ;
    public $marital_status_id ;
    public $member_type_id ;
    public $religion_id ;
    public $gender_id ;
    public $department_id;
    public $family_id ;
    public $education_id ;
    public $career_occupation_id ;
    public $certifications_id ;
    public $awards_id ;
    
    function __construct($nrc, $passport, $name, $surname, $date_of_birth, $middle_name, $social_network_id, $nationality, $phone, $telephone, $email, $spiritual_dob, $profile_photo, $name_of_spouse, $generation, $marital_status_id, $member_type_id, $religion_id, $gender_id, $department_id, $family_id, $education_id, $career_occupation_id, $certifications_id, $awards_id) {
        $this->nrc = $nrc;
        $this->passport = $passport;
        $this->name = $name;
        $this->surname = $surname;
        $this->date_of_birth = $date_of_birth;
        $this->middle_name = $middle_name;
        $this->social_network_id = $social_network_id;
        $this->nationality = $nationality;
        $this->phone = $phone;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->spiritual_dob = $spiritual_dob;
        $this->profile_photo = $profile_photo;
        $this->name_of_spouse = $name_of_spouse;
        $this->generation = $generation;
        $this->marital_status_id = $marital_status_id;
        $this->member_type_id = $member_type_id;
        $this->religion_id = $religion_id;
        $this->gender_id = $gender_id;
        $this->department_id = $department_id;
        $this->family_id = $family_id;
        $this->education_id = $education_id;
        $this->career_occupation_id = $career_occupation_id;
        $this->certifications_id = $certifications_id;
        $this->awards_id = $awards_id;
    }



    
}
