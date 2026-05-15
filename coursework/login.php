<?php
    session_start();
    include 'loginProcess.php';

    if(isset($_SESSION["sessionID"]))
    {
        header("Location: addEntry.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title> Login </title>
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/login.css" rel="stylesheet" type="text/css" />
        <link href="css/loginMobile.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)"/> 

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Play:wght@400;700&family=Quicksand:wght@300..700&family=Staatliches&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        
    </head>

    <body>
        <div id="container">
            <header>
                <h1> Kishal Chhetri </h1>
                <nav>
                    <ul>
                        <li> <a href="index.php"> Home </a></li>
                        <li> <a href="education.php"> Education </a></li>
                        <li> <a href="portfolio.php"> Portfolio </a></li>
                        <li> <a href="skills.php"> Skills </a></li>
                        <li> <a href="viewBlog.php"> Blog </a></li>
                        <li id="highlight"> <a href="login.php"> Login </a></li>
                    </ul>
                </nav>
            </header>

            <section id="loginform">
                <?php
                    $selfRedirect = $_SERVER['PHP_SELF'];
                    echo"<form method=\"POST\" action=\"$selfRedirect\">
                        <legend> Login </legend>
                        <fieldset>
                            <div class=\"input\">
                                <label> Email </label>
                                <input type=\"email\" name=\"Email\" placeholder=\"Email\" required>
                            </div>

                            <div class=\"input\">
                                <label> Password </label>
                                <input type=\"password\" name=\"Password\" placeholder=\"Password\" required>
                            </div>

                        </fieldset>";

                    if(isset($GLOBALS["failedLogin"]) && $GLOBALS["failedLogin"] == FALSE)
                    {
                        echo "<em id=\"error\">Incorrect Credentials!</em>";
                        unset($GLOBALS["failedLogin"]);
                    }

                    echo"<fieldset id=\"loginb\">
                            <button type=\"submit\"> Login </button>
                        </fieldset>
                    </form>";
                ?>

            </section>
            <footer>
                Kishal Chhetri © 2026
                <a href="https://makerworld.com/en/@shaztech"> Image Reference </a>
            </footer>
        </div>
    </body>
</html>
