<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title> Skills </title>
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/skills.css" rel="stylesheet" type="text/css">
        <link href="css/skillsMobile.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)"/> 

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
                        <li id="highlight"> <a href="skills.php"> Skills </a></li>
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
            
            <section id="tech" class="skills">
                <article>
                    <h1> Technical skills </h1>
                    <p>
                        Throughout my academic journey, I've aquired a number of relevant, technical skills.
                    </p>

                    <ul>
                        <li> Python programming </li>
                        <li> Java programming </li>
                        <li> Software design principles </li>
                        <li> Software modelling </li>
                        <li> OOP design </li>
                        <li> Technical documentation </li>
                        <li> Computational thinking </li>
                    </ul>
                </article>
            </section>

            <div>
                <aside id="techA">
                    <h1> Applications </h1>
                    <p>
                        A lot of these technical skills have been showcased through my academic work or personal projects.
                        For example, my proficiency in python programming was developed through my A-level NEA - Shadowspire!
                        In fact, this project helped me develop countless other technical skills such as technical documentation and 
                        software design principles
                    </p>
                </aside>
            </div>

            <section id="soft" class="skills">
                <article>
                    <h1> Soft skills </h1>
                    <p> While technical skills are important for a career in technology, soft skills are also just as important
                        - if not even more!
                    </p>

                    <ul>
                        <li> Teamwork </li>
                        <li> Leadership </li>
                        <li> Organisation </li>
                        <li> Resilience and perseverance </li>
                        <li> Communication </li>
                        <li> Patience </li>
                        <li> Analytical thinking </li>
                        <li> Problem-solving </li>
                        <li> Creativity </li>
                    </ul>
                </article>
            </section>

            <div>
                <aside id="softA">
                    <h1> Applications </h1>
                    <p>
                        These soft skills have been cultivated throughout a variety of unique experiences. A key soft skill required to thrive is 
                        teamwork - working with others is a key skill and the ability to work together efficiently as a team can prove to be difficult.
                        My teamwork and communication skills have been showcased throughout a variety of hackathons and competitions - such as 
                        Greenpower 24 - where teamwork skills is a must-have, not something you can ignore!
                    </p>
                </aside>
            </div>

            <footer>
                Kishal Chhetri © 2026
                <a href="https://makerworld.com/en/@shaztech"> Image Reference </a>
            </footer>
        </div>
    </body>
</html>