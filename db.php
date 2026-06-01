<?php
$conn = mysqli_connect("localhost", "root", "", "smarika");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>