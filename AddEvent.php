<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="Regform2.css" />
</head>

<body>
    <!--Header-->
    <div class="topnav">
        <a href="MyEventator.php">My Eventator</a>
        <a class="active" href="AddEvent.php">Добавяне на събитие</a>
        <div class="login-container">
            <form action="/action_page.php">
                <!-- <button type="submit">Вход</button> -->
                <a href="index.php">Изход</a>
            </form>

        </div>
    </div>
    <!--Form-->

    <div class="container">
    <form class="form" id="form">
        <h1>Създай анонимно събитие</h1>
        <div class="form-control">
            <input type="text" id="name" placeholder="Име на събитие">
            <small>Error message</small>
        </div>
        
        <div class="form-control">
            <input type="text" id="date" placeholder="Дата на събитие ">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <input type="text" id="place" placeholder="Място на събитието">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <input type="text" id="info" placeholder="Описнание на събитието">
            <small>Error message</small>
        </div>
        
        <div class="form-control">
            <button class="button" id='button'>Създай събитието!</button>
        </div>
    </form>
</div>

    <script src="Regform.js"></script>

<?php
    include_once 'footer.php';
?>