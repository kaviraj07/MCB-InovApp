<?php

// Clear all sessions variables
unset($_SESSION['userEmail']);

// Go to homepage
header("Location: ../../index.php");