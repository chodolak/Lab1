<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Description of student
 * 
 * @author Michael Chodolak
 */

class Student {
    
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Adds emails to student
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //Adds grades to student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //Calculates average grades
    function average() {
        $total = 0;
        foreach($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //Makes string of student's information
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
