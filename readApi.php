<?php
$servername="localhost";
$username="root";
$password="";
$db="poetrydb";

$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

$query="SELECT * FROM poetry";
$result=$conn->query($query);
$Result_Fetch=$result->fetch_all(MYSQLI_ASSOC);

if(empty($Result_Fetch)){
    $response=array("status"=>"0","message"=>"Record is Empty ","data"=>$Result_Fetch);
}
else{
    $response=array("status"=>"1","message"=>"Record Available ","data"=>$Result_Fetch);

}


echo json_encode($response);



?>