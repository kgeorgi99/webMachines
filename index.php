<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Календар</title>

    <link rel="stylesheet" href="Calendar2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="topnav">
        <a class="active" href="index.php">Начало</a>
        <a href="Regform.php">Регистрация</a>
        <div class="login-container">
            <form action="TO DO">
                <input type="text" name="username" placeholder="Потребителско име">
                <input type="password" name="pass" placeholder="Парола">
                <!-- <button type="submit">Вход</button> -->
                <a href="MyEventator.php">Вход</a>
            </form>
            
        </div>
    </div>

    <div class="container">
        <div class="calendar">
            <div class="month">
                <i class="fas fa-angle-left prev"></i>
                <div class="date">
                    <h1></h1>
                    <p></p>
                </div>
                <i class="fas fa-angle-right next"></i>
            </div>

            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>

            <div class="days"></div>
        </div>
        
        <script src="Calendar.js"></script>
        <!--Footer-->
<?php
    include_once 'footer.php';
?>