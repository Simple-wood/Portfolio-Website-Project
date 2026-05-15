<?php
    include 'insertionSort.php';
    session_start();

    if(isset($_POST["Title"]) && isset($_POST["Entry"]) || (isset($_SESSION["title"])) && isset($_SESSION["entry"]))
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "accounts";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if(isset($_POST["Title"]) && isset($_POST["Entry"]))
        {
            $title = $_POST["Title"];
            $title = mysqli_real_escape_string($conn, $title);
            $entry = $_POST["Entry"];
            $entry = mysqli_real_escape_string($conn, $entry);
        }
        else{
            $title = $_SESSION["title"];
            $title = mysqli_real_escape_string($conn, $title);
            $entry = $_SESSION["entry"];
            $entry = mysqli_real_escape_string($conn, $entry);

            unset($_SESSION["title"]);
            unset($_SESSION["entry"]);
        }

        date_default_timezone_set("UTC");
        $date = date("Y-m-d H:i:s");

        if($conn->connect_error)
        {
            die("Connection failed");
        }

        $rowData = array("title" => $title, "entry" => $entry, "dateOfEntry" => $date);
        if(isset($_POST["Title"]) && isset($_POST["Entry"]))
        {
            insertEntryByDate($_SESSION["blog_posts"], $rowData);
        }
        
        $sql = "INSERT INTO blogs (title, entry, dateOfEntry) VALUES ('$title', '$entry', '$date')";

        if($conn->query($sql) == TRUE){
            $conn->close();
            header("Location: viewBlog.php");
            die();
        }

        $conn->close();
    }
?>