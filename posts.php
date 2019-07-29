<?php
        session_start();
    require_once("includes/classes/header.php");
    $header = new Header("");
    $header->output();
    

    include("includes/config.php");
    include("includes/navbar.php");
?>

<div class="container" style="margin-top:5%">

    <h3 class="mt-10">Places (Lendroits)</h3>
    <div class="row mt-10" id="places">

    </div>

    <h3 class="mt-10">Creole</h3>
    <div class="row mt-10" id="creole">

    </div>


    <h3 class="mt-10">Music (Musik)</h3>
    <div class="row" id="music">

    </div>

    <h3 class="mt-10">Festivals (Festivales)</h3>
    <div class="row" id="festivals">

    </div>
    <h3 class="mt-10">Games (Zouer)</h3>
    <div class="row" id="games">


    </div>

    <h3 class="mt-10">Food (Manze)</h3>
    <div class="row" id="food">

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.4.0/showdown.min.js"></script>
    <script src="assets/js/posts.js"></script>


    <?php include("includes/footer.php"); ?>