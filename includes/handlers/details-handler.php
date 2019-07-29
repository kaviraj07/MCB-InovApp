<?php

require("../config.php");

$id = $_GET["id"];

$query = "SELECT * FROM post where id = $id;";
    
$result = mysqli_query($con,$query);

$post = mysqli_fetch_assoc($result);

echo json_encode($post);