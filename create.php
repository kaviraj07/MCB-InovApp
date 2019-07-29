<?php


session_start();

    require_once("includes/classes/header.php");
    $header = new Header("");
    $header->output();
    
    include("includes/navbar.php");
    ?>
<div class="container" style="margin-bottom:5% !important;">
    <div class="row">
        <div class="col-sm">
            <form id="form" class="mt-5 ">

                <!-- Title -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="" name="title" required>
                </div>

                <!-- Title in creole-->
                <div class="form-group">
                    <label for="title2">Title in creole</label>
                    <input type="text" class="form-control" id="title" placeholder="" name="title2" required>
                </div>

                <!-- Category -->
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="games" selected>Games</option>
                        <option value="food">Food</option>
                        <option value="festivals">Festivals</option>
                        <option value="places">Cultural places</option>
                        <option value="music">Music</option>
                        <option value="creole">Creole</option>
                    </select>
                </div>

                <!-- description -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <input class="form-control" id="description" rows="10" name="description" required>
                </div>

                <!-- content -->
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" rows="10" name="content" required></textarea>
                </div>

                <!-- Upload image -->
                <div class="form-group">
                    <label for="image">Upload image</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>

                <!-- Upload videos -->
                <div class="form-group">
                    <label for="image">Upload video</label>
                    <input type="file" class="form-control-file" id="video" name="video">
                </div>

                <!-- Submit button -->
                <button id="submit" class="btn btn-success mb-10" type="submit">Save</button><br><br>
                <div id="message"></div>
            </form>

        </div>

        <div class="col-sm">
            <img src="" alt="" id="imageOutput">
            <h1 id="titleOutput"></h1>
            <div id="output">
            </div>
        </div>
    </div>
</div>


<div id="output"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.4.0/showdown.min.js"></script>

<script src="assets/js/create.js"></script>

<?php include("includes/footer.php"); ?>