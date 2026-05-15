<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title> Kishal's Warudo </title>
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <link href="css/indexMobile.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)"/>
        
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
                        <li id="highlight"> <a href="index.php"> Home </a></li>
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

            <div id="main">
                <section>
                    <article>
                        <div id="about">
                            <div>
                                <em> Kishal Chhetri. </em>

                                <p>
                                    First-year Computer Science and Artificial Intelligence student at Queen Mary's University of London. 
                                    I enjoy writing code and building projects that 
                                    push my understanding of technology. 
                                    I'm always looking to improve my technical depth and take on more complex challenges.
                                </p>
                            </div>

                            <figure>
                                <img src="images/kishal.jpg" alt="" />
                            </figure>

                        </div>
                    </article>  
                </section>
            </div>

            <section id="contact">
                <h1> Contact me </h1>

                <ul>
                    <li> You can contact me on linkedin - <em><a href="https://www.linkedin.com/in/kishal-chhetri-20b840292/"> Kishal </a></em></li>
                    <li> You can email me at -  <em><a href="mailto:kishalc_06@outlook.com"> Kishalc_06@outlook.com</a></em></li>
                </ul> 
            </section>

            <section id="links">
                <div>
                    <a href="https://www.linkedin.com/in/kishal-chhetri-20b840292/"> <img src="images/linkedin.png" /> </a>
                </div>

                <div>
                    <a href="https://www.youtube.com/@therighthonourablemonke954"> <img src="images/youtube.png" /> </a>
                </div>

                <div>
                    <a href="https://github.com/Simple-wood"> <img src="images/github.png" /> </a>
                </div>
            </section>
        </div>

        <footer>
            Kishal Chhetri © 2026
            <a href="https://makerworld.com/en/@shaztech"> Image Reference </a>
        </footer>
    </body>
</html>