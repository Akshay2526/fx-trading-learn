<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$sql = "INSERT INTO registrations(name,email,phone,course)
VALUES('$name','$email','$phone','$course')";

if(mysqli_query($conn, $sql)) {
    echo "Registration Successful";
} else {
    echo "Error";
}

?>