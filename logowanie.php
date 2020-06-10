<<<<<<< HEAD
<?php session_start();?>
=======
>>>>>>> origin/master
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>MinePanel</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="/js/bootstrap.js"></script>
    <!--<meta http-equiv="refresh" content="30">-->
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="logo"><a href="index3.php">
                <img src="img/logo.png" alt="logo" style="float: left"/>
                <span id="logospan1">Mine  Panel</span></a>
            <div style="clear: both"></div>
        </div>
    </div>
    <div class="sticky">
        <ol>
            <li><a href="index3.php">Strona Główna</a></li>
            <li><a href="news.php">Aktualności</a></li>
            <li><a href="logowanie.php">Logowanie</a></li><!-- Potem Panel Gracza-->
            <li><a href="rules.php">Regulamin</a></li>
            <li><a href="world.php">Opis Świata</a></li>
<<<<<<< HEAD
=======

>>>>>>> origin/master
            <li><a href="kontakt.php">Kontakt</a>
            </li>
        </ol>
    <!-- Jeżeli zalogowany
        <ol>
        <li><a href="index.php">Strona Główna</a></li>
        <li><a href="news.php">Aktualności</a></li>
        <li><a href="logowanie.php">Panel</a></li>
        <li><a href="rules.php">Regulamin</a></li>
        <li><a href="world.php">Opis Świata</a></li>

        <li><a href="kontakt.php">Kontakt</a>
        </li>
        </ol>

        -->
    </div>
    <div class="wrapper">
        <div class="container">
<<<<<<< HEAD
            <?php
            if(!isset($_SESSION['loged']) || $_SESSION['loged']=0 || $_SESSION['login']==""){
                echo '<div class="logowanie">
                   <form action="config/login.php" method="post">
                <input type="text" id="login" name="username" placeholder="Login" required><br/>
                <input type="password" id="haslo"  name="password" placeholder="Hasło" required><br/>

              <input type="submit" name="action" value="Log in" /><br/>
                <a class="zaphaslo" href="#"> Zapomniałeś hasła ?</a>
            </div>
            </form>
';}?>
        <?php
            if(isset($_SESSION['login']) && $_SESSION['loged']=1){
                echo 'zalogowano';
                echo ' witaj '.$_SESSION['login'];
                echo '<form action="config/login.php" method="post">
                         <input type="submit" name="action" value="Log Out" />
                        </form>

';
            }
            ?>
=======
            <div class="logowanie">
                <input type="text" id="login" placeholder="Login" required><br/>
                <input type="password" id="haslo" placeholder="Hasło" required><br/>

                <input type="submit" value="Zaloguj"><br/>
                <a class="zaphaslo" href="#"> Zapomniałeś hasła ?</a>
            </div>
            <!-- -->

            <input >


>>>>>>> origin/master
        </div>

    </div>
    <div class="footer">
        <a class="link" href="kontakt.php"> e-Nes.pl/MinePanel</a>   Wszelkie prawa zastrzeżone.
    </div>
</body>
<<<<<<< HEAD
</html>``
=======
</html>
>>>>>>> origin/master
