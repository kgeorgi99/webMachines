<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $name = $_POST["name"];
    $famname = $_POST["famname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passconfirm = $_POST["passconfirm"];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';
    
    if(emptyInput($username, $name, $famname, $email, $pass, $passconfirm) !== false){
        header("location: ../Regform.php?error=emptyinput");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../Regform.php?error=invalidemail");
        exit();
    }
    if(passMatch($pass, $passconfirm) !== false){
        header("location: ../Regform.php?error=notmatchingpass");
        exit();
    }
    if(usernameExists($conn, $username) !== false){ 
        header("location: ../Regform.php?error=usernametaken");
        exit();
    }
    
    createUser($conn, $username, $name, $famname, $email, $pass);
}
 else{
    header("location: ../Regform.php");
    exit();
} 