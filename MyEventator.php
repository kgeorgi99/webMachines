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
        <a class="active" href="MyEventator.php">My Eventator</a>
        <a href="AddEvent.php">Добавяне на събитие</a>
        <div class="login-container">
            <form action="TO DO">
                <!-- <button type="submit">Вход</button> -->
                <a href="index.php">Изход</a>
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
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
                <div>Sun</div>
            </div>

            <div class="days">
            </div>
        </div>

        <script src="Calendar.js"></script>
        <!--Footer-->
<?php
    include_once 'footer.php';
?>