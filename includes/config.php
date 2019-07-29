<?php
// session_start();

// Set timezone
$timezone = date_default_timezone_set("Indian/Mauritius");

// db connection
$con = mysqli_connect("localhost", "root", "", "inovapp");

// Check if db connection success
if (mysqli_connect_errno()) {
    die("Failed to connect: " . mysqli_connect_errno());
}

define("ROOT_URL", "http://localhost/Inovapp/");