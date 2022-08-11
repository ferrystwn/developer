<?php
require_once('oop/Animal.php');

class Frog extends Animal{
    public $jump = "hop hop";
    public $legsf = 4;
    public $cold_bloodedf = "true";           

    public function jump($jump)
    {
        return "katak melompat dengan langkah :".$jump;
    }
}
?>