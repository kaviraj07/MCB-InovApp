<?php
        include("includes/classes/Messages.php");
    if(isset($_POST["submitBtn"])){

        include("includes/classes/Account.php");
        include("includes/config.php");

        $account = new Account($con);

        $fname = strip_tags($_POST["fname"]);
        $lname = strip_tags($_POST["lname"]);
        $email = strip_tags($_POST["email"]);
        $pwd = strip_tags($_POST["password"]);

        $encyptedPwd = md5($pwd);

        if(!$account->register($fname,$lname,$email,$encyptedPwd)){
            // Display error message
            Messages::setMsg("Registration was not successful","error");
        }else{
            Messages::setMsg("Registration was successful","");
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

    #register {
        margin: 5%;
    }

    h2 {
        text-align: center;
    }
    </style>
</head>

<body>

    <?php include("includes/navbar.php"); ?>

    <section id="register">

        <h2>Create an account</h2>

        <div class="ui card">

            <div class="content">

                <form method="POST" class="ui form" action="register.php">

                    <!-- First name -->
                    <div class="field">
                        <label>First Name</label>
                        <input type="text" name="fname" required>
                    </div>

                    <!-- Last name -->
                    <div class="field">
                        <label>Last Name</label>
                        <input type="text" name="lname" required>
                    </div>

                    <!-- Email -->
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
                    <button class="ui large button" type="submit" name="submitBtn">Sign up</button>

                </form>


                <div class="bottom">
                    Already have an account? <a href="login.php">&nbsp;Log in</a>
                </div>

            </div>

    </section>

    <?php include("includes/footer.php"); ?>