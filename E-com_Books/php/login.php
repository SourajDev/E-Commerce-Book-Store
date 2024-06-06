<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $uname = $_POST['e_name'];

    $pass = $_POST['p_name'];

    //Database Connection

    $server="localhost";
    $user="root";
    $password="";
    $mydb="store";

    $conn=mysqli_connect($server,$user,$password,$mydb);

    if(!$conn){
        echo "Not connected". mysqli_error($conn);
    }

    $query="SELECT * FROM user_data_create WHERE Email='$uname' AND Pass_wd='$pass'";



    $result = $conn->query($query);

    if ($result === false) {
        // Query failed, handle the error
        echo "Query failed: " . $conn->error;
    } else {
        if ($result->num_rows == 1) {
            // Login successful
           header("Location:../index2.html");
           
            exit();
        } else {
            // Login failed
            echo "";
            header("Location:../fail.html");
            exit();
        }
    }
    




    $conn->close();

}

?>

    

