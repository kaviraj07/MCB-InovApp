<?php

class Account
{
    private $con; // db connection

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function validateUserLogin($email, $password)
    {
        // Md5 encryption
        $password = md5($password);

        // Check if email & password exists
        $query = mysqli_query($this->con, "SELECT * FROM users WHERE email='$email' AND password ='$password'");

        if (mysqli_num_rows($query) == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function register($firstName, $lastName, $email, $password)
    {
        // Encrypt password
        $encryptedPwd = md5($password);

        // Insert values to db
        $result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$firstName', '$lastName','$email', '$encryptedPwd')");
        return $result;
    }

}