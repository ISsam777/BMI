<?php
class BmiModel  {

private $db;
public function __construct($database){
$this->db= $database;
}

public function saveBmiRecord($name, $weight, $height, $bmi, $status){
// SQL Isert Query

}
public function getBmiHistory(){

// SQL Select Query

}
?>
