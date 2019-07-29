<?php

require "../config.php";

$query = "SELECT * FROM post;";
    
$result = mysqli_query($con,$query);

$posts = array();

while($post = mysqli_fetch_assoc($result)){
    array_push($posts,$post);
}

echo json_encode($posts);