<?php

if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["name"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        // sends user back 
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    else if (invalidUid($username) !== false) {
        // sends user back 
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    else if (invalidEmail($email) !== false) {
        // sends user back 
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    else if (pwdMatch($pwd, $pwdRepeat) !== false) {
        // sends user back 
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    else if (uidExists($conn, $username, $email) !== false) {
        // sends user back 
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    createUser($conn, $name, $email, $pwd);
}
else {
    // sends user back 
    header("location: ../signup.php");
}