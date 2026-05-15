<?php
    include 'insertionSort.php';
    session_start();

    if(! isset($_SESSION["sessionID"]))
    {
        header("Location: login.php");
    }

    if(!(isset($_SESSION["title"]) && (isset($_SESSION["entry"]))))
    {
        if(isset($_POST["Title"]) && isset($_POST["Entry"]))
        {
            $title = $_POST["Title"];
            $entry = $_POST["Entry"];

            $_SESSION["title"] = $title;
            $_SESSION["entry"] = $entry;

            date_default_timezone_set('UTC');
            $date = date("Y-m-d H:i:s");

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $rowData = array("title" => $title, "entry" => $entry, "dateOfEntry" => $date);
                insertEntryByDate($_SESSION["blog_posts"], $rowData);
            }   
        }      
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title> Blog </title>
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/previewEntry.css" rel="stylesheet" type="text/css" />
        <link href="css/previewEntryMobile.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)"/>

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

                        <?php
                            if(! isset($_SESSION["sessionID"]))
                            {
                               echo "<li> <a href=\"login.php\"> Login </a></li>";
                            }
                        ?>

                    </ul>
                </nav>
            </header>
        
            <section id = "blog">
                <h1 id="mainTitle"> Kishal's blogs </h1>
                    <?php
                        for($i = 0; $i < count($_SESSION["blog_posts"]); $i++)
                        {
                            echo "<article>";

                            $rowData = $_SESSION["blog_posts"][$i];
                            $title = $rowData["title"];
                            $entry = $rowData["entry"];
                            $date = $rowData["dateOfEntry"];

                            $displayDate = date('jS F Y, G:i', strtotime($date));
                            
                            echo "<h3 class=\"date\"> $displayDate UTC </h3>";
                            echo "<h1 class=\"title\"> $title </h1>";
                            echo "<p class=\"entry\"> $entry </p>"; 
                            
                            echo "</article>";
                        }
                    ?>
            </section>

            <section id="choice">
                    <h1> Previewing Blog </h1>

                    <div id="buttons">
                        <button> <a href="addPost.php"> Post </a> </button>
                        <button> <a href="addEntry.php"> Back </a> </button>
                    </div>
            </section>

            <footer>
                Kishal Chhetri © 2026
                <a href="https://makerworld.com/en/@shaztech"> Image Reference </a>
            </footer>
    </body>
</html>