<?php

$server="localhost";
$user="root";
$Password="";
$dbname="store";

$conn=mysqli_connect($server,$user,$Password,$dbname);

if(!$conn){
    echo "Not connected";
}
else{
    echo "";
}


$first_name =  $_POST['name'];
$email = $_POST['email'];
$passw= $_POST["Pass_code"];

$sql = "INSERT INTO user_data_create (Name,Email,Pass_wd)
VALUES ('$first_name','$email','$passw')";

if(mysqli_query($conn, $sql)){
    echo "";
    header("Location:../added.html");
}
else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
}
$conn->close();

?>