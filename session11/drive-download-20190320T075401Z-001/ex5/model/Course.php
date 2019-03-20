<?php

class Course {
    private $title;
    private $section;    
    private $instructor;

    public function __construct($title, $section, $instructor) {
        $this->title = $title;
        $this->section = $section;
        $this->instructor = $instructor;
    }
    
    public function getTitle(){
        return $this->title;
    }

    public function getSection(){
        return $this->section;
    }

    public function getInstructor(){
        return $this->instructor;
    }
}

?>