<?php
session_start();

if(!isset($_SESSION['user'])){
die("Please Login First");
}
?>

<h1>Welcome To Student Dashboard</h1>
<p>Your course access is active.</p>