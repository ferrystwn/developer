<?php
require_once('oop/Animal.php');

class Ape extends Animal{
    public $jump = "Auooo";
    public $legsa = 2;  
    public $cold_bloodeda = "false";

    public function yell($yell)
    {
        return "monyet mengeluarkan suara :".$yell;
    }
}
?>