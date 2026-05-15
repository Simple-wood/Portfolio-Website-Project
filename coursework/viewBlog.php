<?php
    include 'insertionSort.php';
    session_start();
    date_default_timezone_set('UTC');

    if(! isset($_SESSION["blog_posts"]))
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "accounts";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if($conn->connect_error)
        {
            die("Connection failed");
        }


        $sql = "SELECT title, entry, dateOfEntry FROM blogs";
        $results = $conn->query($sql);
        $conn->close();

        if($results->num_rows > 0)
        {
            $_SESSION["blog_posts"] = array();
            $row = $results->fetch_assoc();
            while($row)
            {
                insertEntryByDate($_SESSION["blog_posts"], $row);
                $row = $results->fetch_assoc();
            } 
        }
        else{
            if(isset($_SESSION["sessionID"]))
            {
                header("Location: addEntry.php");        
            }
            else{
                header("Location: login.php");  
            }
        }
    }

    if(count($_SESSION["blog_posts"]) == 0)
    {
        if(isset($_SESSION["sessionID"]))
        {
            header("Location: addEntry.php");        
        }
        else{
            header("Location: login.php");  
        }           
    }

    $months = array();
    for($i = 0; $i < count($_SESSION["blog_posts"]); $i++)
    {
        $rowData = $_SESSION["blog_posts"][$i];
        $date = $rowData["dateOfEntry"];
        $timestamp = strtotime($date);
        $month = date("F", $timestamp);

        if(! in_array($month, $months))
        {
            $months[] = $month;
        }
    }

    $working_blogs = $_SESSION["blog_posts"];

    if(! isset($_POST["filters"]))
    {
        $choice = date("F");
    }
    else{
        $choice = $_POST["filters"];  
    }


    if($choice != "None")
    {
        $working_blogs = array();
        for($i = 0; $i < count($_SESSION["blog_posts"]); $i++)
        {
            $workingDate = strtotime($_SESSION["blog_posts"][$i]["dateOfEntry"]);
            if(date("F", $workingDate) == $choice)
            {
                $working_blogs[] = $_SESSION["blog_posts"][$i];
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
        <link href="css/viewBlog.css" rel="stylesheet" type="text/css" />
        <link href="css/viewBlogMobile.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)"/>

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
                        <li id="highlight"> <a href="viewBlog.php"> Blog </a></li>

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

                        if(count($working_blogs) == 0)
                        {
                            echo "<p> Sorry, there are no blog entries avaliable! </p>";
                        }
                        else{
                            for($i = 0; $i < count($working_blogs); $i++)
                            {
                                echo "<article>";

                                $rowData = $working_blogs[$i];
                                $title = $rowData["title"];
                                $entry = $rowData["entry"];
                                $date = $rowData["dateOfEntry"];

                                $displayDate = date('jS F Y, G:i', strtotime($date));
                                
                                echo "<h3 class=\"date\"> $displayDate UTC </h3>";
                                echo "<h1 class=\"title\"> $title </h1>";
                                echo "<p class=\"entry\"> $entry </p>"; 
                                
                                echo "</article>";
                            }
                        }
                    ?>
            </section>

            <div>
                <aside id="welcome">
                    <?php
                        if(isset($_SESSION["sessionID"]))
                        {
                            echo "<h2> Welcome User </h2>";
                            echo "<section id=\"buttons\">";
                            echo "<button> <a href=\"addEntry.php\"> Add a new entry </a> </button>";
                            echo "<button> <a href=\"logout.php\"> Logout </a> </button>";
                            echo "</section>";
                        }
                        else{
                            echo "<p> Please login to be able to write new blog entries! </p>";
                            echo "<button> <a href=login.php> Login </a> </button>";
                        }
                    ?>
                </aside>
            </div>

            <div>
                <aside id="months">
                    <h2> Select Filter </h2>
                    <?php 
                        $selfRedirect = $_SERVER['PHP_SELF'];
                        echo "<form method=\"POST\" action=\"$selfRedirect\">
                            <fieldset>
                                <select name=\"filters\">";
                                    for($i = 0; $i < count($months); $i++)
                                    {
                                        $monthOption = $months[$i];
                                        echo "<option value=\"$monthOption\"> $monthOption </option>";
                                    }
                        echo "<option value=\"None\"> All Posts </option></select> </fieldset>";
                        echo "<fieldset>
                                <button type=\"submit\"> Apply Filter </button>
                            </fieldset> </form>";
                    ?>
                </aside>
            </div>

            <footer>
                Kishal Chhetri © 2026
                <a href="https://makerworld.com/en/@shaztech"> Image Reference </a>
            </footer>
    </body>
</html>