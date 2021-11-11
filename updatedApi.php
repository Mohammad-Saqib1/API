<?php
$servername="localhost";
$username="root";
$password="";
$db="poetrydb";


$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

$POETRY=  $_POST['POETRY'];
$ID= $_POST['ID'];


$query="UPDATE poetry SET poetry ='$POETRY' WHERE id='$ID' ";

$result=$conn->query($query);

if($result){
    $response=array("status"=>"1","message"=>"Poetry Updated Successfully ");

}
else{
    $response=array("status"=>"0","message"=>"Poetry Not Updated Successfully ");

}

echo json_encode($response);

?>
