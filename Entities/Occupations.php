<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Occupations
 *
 * @author HP
 */
class Occupations {
    
    public $nrc;
    public $passport;
    public $prof_career;
    public $duration_start;
    public $duration_end;
    public $position;
    public $co_remarks;
    
    
    function __construct($nrc, $passport, $prof_career, $duration_start, $duration_end, $position, $co_remarks) {
        $this->nrc = $nrc;
        $this->passport = $passport;
        $this->prof_career = $prof_career;
        $this->duration_start = $duration_start;
        $this->duration_end = $duration_end;
        $this->position = $position;
        $this->co_remarks = $co_remarks;
    }


}
