<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "store_data";

$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    "Connected successfully.<br>";
}

$full_name = $_POST['P_name'];
$city = $_POST['city_n'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_no'];
$gender = $_POST['gender'];
$occupation =$_POST['occupation'];
$book_name = $_POST['book_name'];
$isbn_number = $_POST['isbn_number'];
$book_author = $_POST['book_author'];
$issued_state = $_POST['state'];
$delivery_date_to = $_POST['date_to'];
$delivery_date_from = $_POST['date_from'];

$sql = "INSERT INTO book_request_data(Name, City, Email, Mob_no, Gender, Occupation, Book_Name, Isbn_Number, BookWritter, Issued_State, DeliveryTo, DeliveryFrom)
        VALUES ('$full_name', '$city', '$email', '$mobile_number', '$gender', '$occupation', '$book_name', '$isbn_number', '$book_author', '$issued_state', '$delivery_date_to', '$delivery_date_from')";

if (mysqli_query($conn, $sql)) {
     "Records added successfully.";
} else {
    echo "ERROR: Could not execute. " . mysqli_error($conn);
}

include 'thankyou.php';

$conn->close();
?>
