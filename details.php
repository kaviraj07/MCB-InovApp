<?php
    require_once("includes/classes/header.php");
    $header = new Header("");
    $header->output();
    
    include("includes/navbar.php");

?>

<div class="container" style="margin-top:35px;margin-bottom:35px">
    <div class="row">
        <div class="col sm">
            <h1 id="title" style="margin-bottom:35px"></h1>
            <h4>Image</h4><br>
            <img id="image" alt="" style="margin-bottom:35px;width=100% !important;" ;><br>

            <h4 id="videotitle">Video</h4><br>
            <div id="videocontainer"></div>
        </div>

        <div class="col-sm">
            <p id="content" style="margin-bottom:35px"> </p>
        </div>

    </div>

</div>

<div id="output"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.4.0/showdown.min.js"></script>
<script src="assets/js/details.js"></script>

<?php include("includes/footer.php"); ?>