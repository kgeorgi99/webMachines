<?php

function emptyInput($username, $name, $famname, $email, $pass, $passconfirm){
    if(empty($username) || empty($name) || empty($famname) || empty($pass) || empty($passconfirm)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function passMatch($pass, $passconfirm){
    if($pass !== $passconfirm){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $username){
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);    
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../Regform.php?error=smthhappened");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $name, $famname, $email, $pass){
    $sql = "INSERT INTO users (username, name, famname, email, pass) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);    
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../Regform.php?error=smthhappened");
        exit();
    }
    
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $username, $name, $famname, $email, $hashedPass);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("location: ../Regform.php?error=none");
    exit();
}