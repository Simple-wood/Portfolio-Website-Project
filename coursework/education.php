<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Education </title>
        <meta name="viewport" content="width=device-width">
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/education.css" rel="stylesheet" type="text/css" />
        <link href="css/educationMobile.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)"/>       

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
                        <li id="highlight"> <a href="education.php"> Education </a></li>
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
            
            <section id="QMUL">
                <article class="education">
                    <div class="institution">
                        <h1> Queen Mary's University of London </h1>
                        <h1 class="date"> 2025 - 2029 </h1>
                    </div>

                    <p>
                        At Queen Mary's University of London, I am studying Computer Science and Artificial intelligence
                        with a year in industry. While I have only just started, I have been making major progress in my studies!
                    </p>
                    <br/>
                    <ul>
                        <li> Procedural Programming - 78% </li>
                        <li> Computer Systems and Networks - 92% </li>
                        <li> Discrete Logic and Structures - 81% </li>
                        <li> Professional Research and Practise - 80.5% </li>
                    </ul>
                </article>
            </section>

            <div id="QMULA">
                <aside class="achievements">
                        <h1> Notable Achievements </h1>
                        <ul>
                            <li> Achieved <em> 92% </em>for Computer Systems and Networks! </li>
                            <li> Winner of the <em> IBM AI Racing League! </em></li>
                            <li> Participated in numerous <em> hackathons </em> - HackLondon, Rockstar games, ect - 
                                 during my time at Queen Mary's! </li>
                        </ul>
                </aside>
            </div>

            <section id="GHSA">
                <article class="education">
                    <div class="institution">
                        <h1> Greenford High School </h1>
                        <h1 class="date"> 2023 - 2025 </h1>
                    </div>

                    <p>
                        During this time period at Greenford High School is where I studied <em> A-Levels</em>.
                        Here I studied <em> Maths</em>, <em> Physics </em> and <em> Computer Science</em>.
                        I picked up on a lot of key skills like critical thinking, problem-solving and teamwork,
                        thanks to the cultivation of these skills and my own determination - I was able to achieve
                        <em> outstanding </em> results in my A-Levels.
                    </p>
                    <br/>
                    <ul>
                        <li> Maths - A* </li>
                        <li> Physics - A </li>
                        <li> Computer Science - A </li>
                    </ul>
                </article>
            </section>

            <div id="GHSAA">
                <aside class="achievements">
                        <h1> Notable Achievements </h1>
                        <ul>
                            <li> Won a Certificate of Achievement in Computer Science - the only one in my Computer Science cohort to obtain this award -
                                in recognition of my <em> dedication </em>, <em> excellence </em> and <em> commitment </em> to learning. </li>
                            <li>  I Was part of a select group of people to be featured on my school's newsletter 
                                - and subsequent other newsletters - in recognition of my <em> outstanding </em> results. </li>
                            <li> <em> Silver </em> DOfE Award </li>
                            <li> <em> Bronze </em> UKMT </li>
                        </ul>
                </aside>
            </div>
            
            <section id="GHSG">
                <article class="education">
                    <div class="institution">
                        <h1> Greenford High School </h1>
                        <h1 class="date"> 2023 - 2025 </h1>
                    </div>

                    <p>
                        During this time period at Greenford High School is where I studied <em> GCSEs </em>.
                        Here I studied <em> Maths</em>, <em> Physics</em>, <em> Computer Science</em>, 
                        <em> Chemistry</em>, <em> Biology</em>, <em> English Language</em>,
                        <em> English Literature </em> and more!
                    </p>
                    <br/>
                    <ul>
                        <li> Physics - 9 </li>
                        <li> Chemistry - 9 </li>
                        <li> Biology - 9 </li>
                        <li> Computer Science - 9 </li>
                        <li> Maths - 8 </li>
                        <li> English Literautre - 8 </li>
                        <li> English Language - 8 </li>
                        <li> Religious Education - 8 </li>
                        <li> Economics - 7 </li>
                        <li> German - 6 </li>
                    </ul>
                </article>
            </section>

            <div id="GHSAG">
                <aside class="achievements">
                        <h1> Notable Achievements </h1>
                        <ul>
                            <li> Was part of select group of people to be featured on my school's newsletter - 
                                 and subsequent other newsletters - in recognition of my <em> outstanding </em> results </li>
                            <li> Won numerous certificates and awards </li>
                            <li> <em> Bronze </em> UKMT(s) </li>
                        </ul>
                </aside>
            </div>
        </div>
        <footer>
            Kishal Chhetri © 2026
            <a href="https://makerworld.com/en/@shaztech"> Image Reference </a>
        </footer>

    </body>
</html>