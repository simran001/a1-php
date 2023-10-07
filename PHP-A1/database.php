<?php
class Database{
private $connection;
function __construct(){
$this->connect_db();
}
public function connect_db(){
    $this->connection =mysqli_connect('172.31.22.43', 'Simran200555884', 'FQIqMa6wiB', 'Simran200555884');
    if(mysqli_connect_error()){
        die ("Database connection failed" . mysqli_connect_error());
    }
}
public function create($fname,$lname,,$email,$deladdress){
    $sql= "INSERT INTO pizzaPerson(fname,lname,email,deladdress) VALUES ('$fname','$lname','$email','$deladdress')";
    $res =mysqli_query($this->connection, $sql);
    if($res){
        return true;
    } else{
        return false;
    }
}

public function read($id=null){
    $sql = "SELECT * FROM pizzaPerson";
    if($id){
        $sql .= " WHERE id=$id";
    }
    $res = mysqli_query($this->connection, $sql);
    return $res;
}

public function sanitize ($var){
    $return =mysqli_real_escape_string($this->connection, $var);
    return $return;
}
}

$database =new Database ();
?>