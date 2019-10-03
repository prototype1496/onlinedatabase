<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Certificate
 *
 * @author HP
 */
class Certificate {
    public $nrc;
    public $passport;
    public $cert_institudion_name;
    public $issued_by;
    public $issue_date;
    public $enucation_remark;
    
    function __construct($nrc, $passport, $cert_institudion_name, $issued_by, $issue_date, $enucation_remark) {
        $this->nrc = $nrc;
        $this->passport = $passport;
        $this->cert_institudion_name = $cert_institudion_name;
        $this->issued_by = $issued_by;
        $this->issue_date = $issue_date;
        $this->enucation_remark = $enucation_remark;
    }

}
