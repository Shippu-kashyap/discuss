<?php 
$host="localhost";
$username="root";
$password=null;
$database="discuss";

$conn=new mysqli($host,$username,"",$database);

if ($conn->connect_error) {
    die("not connected with DB ". $conn->connect_error);
}else{
 
}

?>