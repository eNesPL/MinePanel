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
        <div class="logo"><a href="index.php">
                <img src="img/logo.png" alt="logo" style="float: left"/>
                <span id="logospan1">Mine  Panel</span></a>
            <div style="clear: both"></div>
        </div>
    </div>
    <div class="sticky">
        <ol>
            <li><a href="index.php">Strona Główna</a></li>
            <li><a href="news.php">Aktualności</a></li>
            <li><a href="logowanie.php">Logowanie</a></li><!-- Potem Panel Gracza-->
            <!-- <li><a href="#">Panel</a>
                <ul>
                    <li><a href="#">Gracza</a></li>
                    <li><a href="#">Moderatora</a></li>
                    <li><a href="#">Administratora</a></li>
                </ul>
            </li>-->
            <li><a href="rules.php">Regulamin</a></li>
            <li><a href="world.php">Opis Świata</a></li>

            <li><a href="kontakt.php">Kontakt</a>
            </li>
        </ol>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="logowanie">
                <input type="text" placeholder="Login"><br/>
                <input type="password" placeholder="Hasło"><br/>

                <input type="submit" value="Zaloguj"><br/>
                <a class="zaphaslo" href="#"> Zapomniałeś hasła ?</a>
            </div>
        </div>

    </div>
    <div class="footer">
        <a class="link" href="kontakt.php"> e-Nes.pl/MinePanel</a>   Wszelkie prawa zastrzeżone.
    </div>
</body>
</html>