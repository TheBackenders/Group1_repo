<?php 
namespace basemodel;
//require_once "C:/xampp\htdocs\Darrebni\group1\app\Database\connect.php";
require __DIR__."/../Database/connect.php";
use database\Connect;

class Basemodel extends Connect{

    protected $db_connect;

    public function __construct()
    {
        $db=new Connect();
        $this->db_connect=$db->get_connect();
    }

    public function show_product($table_name){
        $qeury="SELECT * FROM $table_name";
        $result=$this->db_connect->query($qeury);
        var_dump($result) ;
    }
 

}

$c=new Basemodel();
$c->show_product('products');


?>