<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="Regform2.css" />
</head>

<body>
    <div class="topnav">
        <a href="index.php">Начало</a>
        <a class="active" href="Regform.php">Регистрация</a>
        <div class="login-container">
            <form action="login.inc.php" method="post">
                <input type="text" name="username" placeholder="Потребителско име">
                <input type="password" name="pass" placeholder="Парола">
                <!-- <button type="submit">Вход</button> -->
                <a href="MyEventator.php">Вход</a>
            </form>

        </div>
    </div>

    <!--Form-->

    <div class="container">
        <form class="form" id="signup" action="includes/signup.inc.php" method="post">
            <h1>Регистрация</h1>
            <div class="form-control">
                <input type="text" name="username" id="username" placeholder="Потребителскo име">
            </div>
            <div class="form-control">
                <input type="text" name="name" id="name" placeholder="Собствено име">
            </div>
            <div class="form-control">
                <input type="text" name="famname" id="famname" placeholder="Фамилно име">
            </div>
            <div class="form-control">
                <input type="text" name="email" id="email" placeholder="Имейл адрес">

            </div>
            <div class="form-control">
                <input type="password" name="pass" id="pass" placeholder="Парола">

            </div>
            <div class="form-control">
                <input type="password" name="passconfirm" id="passconfirm" placeholder="Повтори парола">
            </div>

            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo '<p>Fill in all fields!</p>';
                }
                 else if($_GET["error"] == "invalidemail") {
                    echo '<p>Invalid email!</p>';
                }
                else if($_GET["error"] == "notmatchingpass") {
                    echo "<p>Passwords doesn't match!</p>";
                }
                else if($_GET["error"] == "usernametaken") {
                    echo '<p>Username already taken!</p>';
                }
                else if($_GET["error"] == "smthhappened") {
                    echo '<p>Something happened! Try again!</p>';
                }
                else if($_GET["error"] == "none") {
                    echo '<p>You have signed up!</p>';
                }
            }
            ?>
            <button type="submit" name="submit" class="button" id='button'>Регистрирай ме!</button>

        </form>
    </div>

    <!-- <script src="Regform.js"></script>  -->
    <?php
    include_once 'footer.php';
    ?>