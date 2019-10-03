<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Education
 *
 * @author HP
 */
class Education {
    public $nrc;
    public $passport;
    public $institutionName;
    public $major;
    public $educationRemark;
    public $edu_startDate;
    public $edu_endDate;
    
    function __construct($nrc, $passport, $institutionName, $major, $educationRemark, $edu_startDate, $edu_endDate) {
        $this->nrc = $nrc;
        $this->passport = $passport;
        $this->institutionName = $institutionName;
        $this->major = $major;
        $this->educationRemark = $educationRemark;
        $this->edu_startDate = $edu_startDate;
        $this->edu_endDate = $edu_endDate;
    }

 
}
