<?php session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>MinePanel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="/js/bootstrap.js"></script>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
    </div>
    <div class="nav">
        <ol>
            <li><a href="#">Nowości</a></li>
            <li><a href="#">Panel Gracza</a></li>
            <li><a href="#">Receptury</a></li>
            <li><a href="#">Kontakt</a></li>
        </ol>
    </div>
    <div class="container">
        <div class="main">
            <div class="article">
                <div class="img">Tytuł</div>
            </div>
            <div class="article">
                <div class="img">Tytuł</div>
            </div>
            <div class="article">
                <div class="img">Tytuł</div>
            </div>
            <div class="article">
                <div class="img">Tytuł</div>
            </div>
        </div>
        <div class="right">
            <div class="logowanie">

                <?php
                if(!isset($_SESSION['loged']) || $_SESSION['loged']=0 || $_SESSION['login']==""){
                echo '
                <form action="config/login.php" method="post">
                <input class="input" type="text" name="username" placeholder="Login"><br/>
                <input class="input" type="password" name="password" placeholder="Hasło"><br/>
                <input class="input" type="submit" name="action" value="Zaloguj"><br/>
                </form>
                <div class="txt"><a href="#">Zapomniałeś hasła ?</a></div>
          
            ';}?>
            <?php
            if(isset($_SESSION['login']) && $_SESSION['loged']=1){

                echo "Witaj ".$_SESSION['login'];
                echo ' <form action="config/login.php" method="post">
                    <input class="input" type="submit" name="action" value="Wyloguj"><br/>
                    </form>

';
                }
                ?>
            </div>
            <div class="ranking">
                <div class="rankighead"><h1>Top 5 Graczy</h1></div>
                <div class="pozrank">Test11</div>
                <div class="pozrank">Test21</div>
                <div class="pozrank">Test31</div>
                <div class="pozrank">Test41</div>
                <div class="pozrank">Test51</div>
            </div>
            <div class="ranking">
                <div class="rankighead"><h1>Top 5 Online</h1></div>
                <div class="pozrank">Test1</div>
                <div class="pozrank">Test2</div>
                <div class="pozrank">Test3</div>
                <div class="pozrank">Test4</div>
                <div class="pozrank">Test5</div>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
</body>
</html>