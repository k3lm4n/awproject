<?php

namespace App\Model;



class ClassConnection
{
  protected $con; 
  public function connectionDB()
  {
    $this->con = new \mysqli(HOST, USER, PASS, DB);
    if (mysqli_connect_error()) {
      trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
    } else {
      
      return $this->con;

    }
  }
}
