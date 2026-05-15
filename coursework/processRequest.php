<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $action = $_POST["action"]; // The names associated with the buttons, here we get the value of the button that was clicked
     
        if($action == "submit")
        {
           include 'addPost.php'; // Must use include so POST data isnt dropped
           
        }

        else if($action == "preview")
        {
            include 'previewEntry.php';     
        }

    }
?>
