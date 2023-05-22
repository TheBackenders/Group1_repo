<?php 
namespace database;

use mysqli;

class Connect {
protected $param;

public function __construct()
{ // $this->param=require "C:/xampp\htdocs\Darrebni\group1\config\config.php";
   $this->param=require __DIR__."/../../config/config.php";
}
public function get_connect(){

    $con=mysqli_connect($this->param['servername'],$this->param['username'],$this->param['password'],$this->param['dbname']);
    if($con->connect_errno){
        die('Connection faild :' . $con->connect_error);
    }
    return $con;
}
}


?>