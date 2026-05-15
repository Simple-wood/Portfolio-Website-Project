<?php
    if(isset($_POST["Email"]) && isset($_POST["Password"]))
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "accounts";
        $conn = new mysqli($servername, $username, $password, $dbname); // Creating an object

        $email = $_POST["Email"];
        $password = $_POST["Password"];

        if($conn->connect_error)
        {
            die("Connection failed!");
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $sql = "SELECT userID FROM useraccounts WHERE email='$email' AND userPassword='$password'";
            $results = $conn->query($sql);

            if($results->num_rows > 0)
            {
                session_start();
                $data = $results->fetch_assoc(); // Gets the query result data as turns into an array
                $_SESSION["sessionID"] = $data["userID"];
                header("Location: addEntry.php");
                die();
            }
            else{
                $GLOBALS["failedLogin"] = FALSE;
            }
        }

        $conn->close(); //Must close the connection once done
    }
?>
