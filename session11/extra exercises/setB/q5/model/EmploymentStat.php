<?php
    class EmploymentStat{
        // declare 7 properties - id : Integer, year : Integer, 
        // university: String, school : String, degree : String, 
        // employment_rate : Float, avgSalary: Integer

        private $id;
        private $year;
        private $university;
        private $school;
        private $degree;
        private $employment_rate;
        private $avgSalary;
       

        // add code for constructor to initialize the properties of Employment class
        public function __construct($id, $year, $university, $school, $degree, $employment_rate, $avgSalary)    
        {
            # code...
            $this->id = $id;
            $this->year = $year;
            $this->university = $university;
            $this->school = $school;
            $this->degree = $degree;
            $this->employment_rate = $employment_rate;
            $this->avgSalary = $avgSalary;
        }

        // add getter methods for returning the properties of Employment class
        public function getId()  
        {
            return $this->id;
        }
 
        public function getYear()  
        {
            return $this->year;
        }
 
        public function getUniversity()  
        {
            return $this->university;
        }
 
        public function getSchool()  
        {
            return $this->school;
        }
 
        public function getDegree()  
        {
            return $this->degree;
        }
 
        public function getEmploymentRate()  
        {
            return $this->employment_rate;
        }
 
        public function getAvgSalary()  
        {
            return $this->avgSalary;
        }
               
    }
?>