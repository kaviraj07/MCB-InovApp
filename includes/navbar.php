<nav class="navbar navbar-expand-lg navbar-dark bg-success">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="index.php">InovApp</a>

        <!-- Burger icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbarContent">

            <ul class="navbar-nav mr-auto"></ul>
            <?php
                if(isset($_SESSION["userEmail"])){
                    echo "
                    <!-- Logout button -->
                    <a class='btn btn-outline-light mr-1' href='includes/handlers/logout-handler.php' role='button'>Logout</a>";
                }
                else{
                    echo "
                     <!-- Login button -->
                    <a class='btn btn-outline-light mr-1' href='login.php' role='button'>Login</a>";

                }
            ?>

            <!-- Login button -->
            <a class="btn btn-outline-light" href="create.php" role="button">Create</a>

        </div>
    </div>

</nav>