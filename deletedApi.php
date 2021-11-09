<?php
$servername="localhost";
$username="root";
$password="";
$db="poetrydb";

$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

$ID= $_POST['ID'];
$query="DELETE FROM poetry WHERE id=$ID";

$result=$conn->query($query);

if($result){
    $response=array("status"=>"1","message"=>"Poetry Deleted Successfully ");
}
else{
    $response=array("status"=>"0","message"=>"Poetry Not Deleted Successfully ");

}


echo json_encode($response);


?>