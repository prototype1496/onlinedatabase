<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adress
 *
 * @author HP
 */
class Adress {
    public $nrc;
    public $passport;
     public $primery_address;
     public $secondary_address;
      public $postcode;
      
       public $region_id;
         public $country_id;
          public $state_province;
           public $city_id;
           
       
           function __construct($nrc, $passport, $primery_address, $secondary_address, $postcode, $region_id, $country_id, $state_province, $city_id) {
               $this->nrc = $nrc;
               $this->passport = $passport;
               $this->primery_address = $primery_address;
               $this->secondary_address = $secondary_address;
               $this->postcode = $postcode;
               $this->region_id = $region_id;
               $this->country_id = $country_id;
               $this->state_province = $state_province;
               $this->city_id = $city_id;
           }


}
