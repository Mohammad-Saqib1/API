<?php
$servername="localhost";
$username="root";
$password="";
$db="poetrydb";

$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);

}


$POETRY= $_POST['POETRY'];
$POET_NAME= $_POST['POET_NAME'];


$query="INSERT INTO poetry(poetry,poetry_name)VALUES('$POETRY','$POET_NAME')";


$result=$conn->query($query);

if($result==1){
    $response=array("status"=>"1","message"=>"Poetry Successfully Inserted ");
}
else{
    $response=array("status"=>"0","message"=>"Poetry Not Successfully Inserted ");

}

echo json_encode($response);



?>