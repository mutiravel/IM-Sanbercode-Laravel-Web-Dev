<?php
class Animal {
    public $name;
    public $Legs=4;
    public $cold_blooded="no";
    
    public function __construct($string) {
        $this->name = $string;
    }
}   
?>