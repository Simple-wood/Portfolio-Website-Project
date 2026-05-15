<?php
    include 'insertionSort.php';
    session_start();
    date_default_timezone_set('UTC');

    if(! isset($_SESSION["sessionID"]))
    {
        header("Location: login.php");
    }

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
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title> Blog </title>
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/addEntry.css" rel="stylesheet" type="text/css">
        <link href="css/addEntryMobile.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)"/> 

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Play:wght@400;700&family=Quicksand:wght@300..700&family=Staatliches&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

        <script src="javascript/submit.js" defer></script>
        <script src="javascript/clearEntry.js" defer></script>
        
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

            <section id="entry">
                <form method="POST" action="processRequest.php">
                    <legend> Add Blog </legend>
                    <?php
                        if(isset($_SESSION["title"]) && isset($_SESSION["entry"]))
                        {
                           unset($_SESSION["blog_posts"][0]);
                           $_SESSION["blog_posts"] = array_values($_SESSION["blog_posts"]);
                        }
                    ?>
                    <fieldset>
                        <div class="input">
                            <?php
                                if(isset($_SESSION["title"]))
                                {
                                    $title = $_SESSION["title"];
                                    echo "<input type=\"text\" name=\"Title\" placeholder=\"Title\" id =\"titleInput\" value=\"$title\">"; 
                                    unset($_SESSION["title"]);
                                }
                                else{
                                    echo "<input type=\"text\" name=\"Title\" placeholder=\"Title\" id =\"titleInput\">";       
                                }
                            ?>
                        </div>

                        <div class="input">
                            <?php
                                if(isset($_SESSION["entry"]))
                                {
                                    $entry = $_SESSION["entry"];
                                    echo "<textarea name=\"Entry\" placeholder=\"Enter your text here\" rows=\"8\" cols=\"50\" id=\"blogContent\">$entry</textarea>"; 
                                    unset($_SESSION["entry"]);
                                }
                                else{
                                    echo "<textarea name=\"Entry\" placeholder=\"Enter your text here\" rows=\"8\" cols=\"50\" id=\"blogContent\"></textarea>";       
                                }
                            ?>
                        </div>
                    </fieldset>

                    <fieldset id="buttons">
                        <button type="submit" id="submitButton" name="action" value="submit"> Post </button>
                        <button type="reset" id="clearButton" name="clear"> Clear </button>
                        <button type="submit" id="previewButton" name="action" value="preview"> Preview </button>
                    </fieldset>
                </form>
            </section>

            <footer>
                Kishal Chhetri © 2026
                <a href="https://makerworld.com/en/@shaztech"> Image Reference </a>
            </footer>
        </div>
    </body>
</html>