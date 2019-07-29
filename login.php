<?php
        // session_start();
        
        include("includes/config.php");
        include("includes/classes/Account.php");
        include("includes/classes/Messages.php");

        if(isset($_POST['loginBtn'])){
            $email = $_POST['email'];
            $password =  $_POST['password'];

            $account = new Account($con);

            if(!$account->validateUserLogin($email,$password)){
                // Display error message
                Messages::setMsg("Invalid email or password","error");
            }else{
                $_SESSION['userEmail'] = $email;
                
                // Go to dashboard
                header("Location: posts.php");
            }
        }
    ?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" />
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

    <link rel="stylesheet" href="assets/css/footer.css">

    <style>
    .ui.card {
        width: 40%;
        margin: 2% auto;
    }

    #login {
        margin: 5%;
    }

    h2 {
        text-align: center;
    }
    </style>
</head>

<body>
    <?php include("includes/navbar.php"); ?>
    <section id="login">

        <h2>Log in into your account</h2>

        <div class="ui card">

            <div class="content">

                <form method="POST" class="ui form" action="login.php">

                    <!-- Username -->
                    <div class="field">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <!-- Password -->
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <!-- Message -->
                    <?php echo Messages::display(); ?>

                    <!-- Submit btn -->
                    <button class="ui large button" type="submit" name="loginBtn">Login</button>

                </form>


                <div class="bottom">
                    Don't have an account? <a href="register.php">&nbsp;Sign up</a>
                </div>

            </div>

    </section>

    <?php include("includes/footer.php"); ?>