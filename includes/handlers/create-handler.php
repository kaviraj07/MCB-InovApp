<?php
require "../config.php";

$title = $_POST["title"];
$title2 = $_POST["title2"];
$content = $_POST["content"];
$category = $_POST["category"];
$description = $_POST["description"];
$image = $_FILES["image"];

$video;
$imagename;
$videoname = "";

$hasVideo = false;

if(file_exists($_FILES['video']['tmp_name']) || is_uploaded_file($_FILES['video']['tmp_name'])) {
    $hasVideo = true;
    $video = $_FILES['video'];
    $videoname = $video["name"];
}

$createdBy = "yuvraj";

// Get image extension
$file_extension = strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));

// Set destination path
$path = "../../assets/images/" . $image["name"] ;


if($hasVideo == true){

    // Set destination path
    $path2 = "../../assets/videos/" . $video["name"] ;
    $videoWasMoved = move_uploaded_file($video['tmp_name'], $path2);

}

// Move img to path
$imageWasMoved = move_uploaded_file($image['tmp_name'], $path);

if (!$imageWasMoved) {
    echo json_encode("Image not saved to server");
    return;
}elseif ($hasVideo==true && !$videoWasMoved) {
    echo json_encode("Video not saved to server");
    return;
}else{
    $createdon = $date = date("Y/m/d");
    $imagename = $image["name"];

    if($hasVideo == false){
        $hasVideo = 0;
    }
    $query = "INSERT INTO post VALUES('','$title','$title2','$content','$category','$description','$imagename','$hasVideo','$videoname','$createdBy','$createdon');";
    
    $result = mysqli_query($con,$query);
    
    if($result){
        echo "success";
    }
}