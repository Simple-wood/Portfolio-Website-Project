<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Portfolio </title>
        <meta name="viewport" content="width=device-width">
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/portfolio.css" rel="stylesheet" type="text/css" />
        <link href="css/portfolioMobile.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)"/> 

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
                        <li id="highlight"> <a href="portfolio.php"> Portfolio </a></li>
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

            <section id="shadowspire" class="portfolio">
                <article>
                    <h1> Shadowspire </h1>
                    <p>
                        Shadowspire was a game I created for my A-levl NEA. This game was based on the roguelite genre so includes many features
                        synonymous with this genre. Shadowspire includes procedural generation, high-level OOP, enemy pathfinding, account creation and login 
                        along with a leaderboard. As a result of my perseverence and determination, I recieved 70/75 for my NEA! 
                    </p>

                    <p>
                        All of the code and files for the game - such as sprites or tilemaps - can be found through the following
                        github link -
                    </p>

                    <a href="https://github.com/einfachesholz/Shadowspire"> Shadowspire </a>
                </article>
            </section>

            <section id="ibm" class="portfolio">
                <article>
                    <h1> HackLondon 2026     </h1>
                    <p>
                        HackLondon 2026 was a hackathon that was hosted at KCL. Here, we created Pengwin - for the hardware track.
                        Pengwin is a survelliance device where you place your phone inside a cute, little penguin. Using the phone's 
                        camera, Pengwin watches your stuff while you may gone, sounding an alarm to act as a deterrant if it detects any 
                        suspicious activity. We created this so that students and professors are able to leave their stuff behind - 
                        perhaps in the library - comfortably without a worry!
                    </p>

                    <p>
                        Check out the code for this project through the github link below -
                    </p>

                    <a href="https://github.com/Simple-wood/IBM-TORCs"> TORCs AI </a>
                </article>
            </section>

            <section id="hacklondon" class="portfolio">
                <article>
                    <h1> IBM AI Racing League </h1>
                    <p>
                        This was a competition - run by IBM - where we had to program a F1 car to race around the notorious corkscrew in TORCs.
                        As part of my submission, I coded a rule-based AI for the F1 car achieving a fastest lap-time of 1:47:84!
                        While this was a tough time - requiring lots of testing, commitment and team-work - our hard-work was rewarded through winning
                        IBM AI Race League Winners - Best Engineering Comms Award and being to qualify to the final round!
                    </p>

                    <p>
                        This hackathon tested our determination, problem-solving skills and more importantly team-work skills.
                        At the end of the 24 hours - with me left with 20mins of sleep - we ended with a working product that we could show 
                        off to the judges, highlighting our cohesion as a team!
                    </p>

                    <p>
                        For more details, check out the LinkedIn post below - 
                    </p>

                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:7431786078446977024/?originTrackingId=zwR6amOBqbE56VrPoNwkWg%3D%3Ds"> Pengwin </a>
                </article>
            </section>

            <section id="pi" class="portfolio">
                <article>
                    <h1> Raspberry Pi Competition 2024 </h1>
                    <p>
                        One of the first BIG projects I undertook was the 2024 Raspberry Pi competition. For this competition, we built a smart
                        pill dispensor using a Raspberry Pi 4. We chose this idea since we were shocked at high expensive smart pill dispensors
                        can be and wondered if we were able to make a cheaper alternative.
                    </p>

                    <p>
                    For this, I was the main programmer behind the project, tackling the software side of things. While I was the main programmer,
                    I was also able to get hands-on experience with working with electronics alongside cultivating my leadership skills - serving
                    as the secondary leader of the team! 
                    </p>
                    
                    <p>
                        All of the code for this project can be found through the following github link below - 
                    </p>

                    <a href="https://github.com/einfachesholz/Pidose"> Pidose </a>
                </article>
            </section>

            <section id="soundboard" class="portfolio">
                <article>
                    <h1> Python Soundboard </h1>
                    <p>
                        A personal project of mine attempting to create my own version of a soundboard, using python and virtual microphones, 
                        to try see if i could make a free alternative. Since this was a personal project, all of the research, planning and 
                        implementation was done by myself. As a result, I was able to develop my project research and planning skills as well
                        as further improving my programming and consequently testing skills.
                    </p>
                    
                    <p>
                        Check out the code for the soundboard below - 
                    </p>

                    <a href="https://github.com/einfachesholz/Pidose"> Soudboard </a>
                </article>
            </section>

            <section id="greenpower" class="portfolio">
                <article>
                    <h1> Greenpower 24 </h1>
                    <p>
                        Another chance to develop key skills that any aspiring developer needs to thrive in the industry. Here, I was selected to 
                        part of my school's team for Greenpower 24 where we built a go-kart from a provided kit. We had to overcome many hurdles 
                        since building a go-kart (even from a kit) was no easy feat!
                    </p>
                </article>
            </section>

            <section id="extras">
                <h1> Extra-curriculars </h1>
                <article>
                <p>
                    During my studies, I participated in a range of extracurricular activities, from sports and volunteering to creative pursuits. 
                    Below are some of the most notable activities I was involved in.
                </p>

                <ul>
                    <li>Duke of Edinburgh Award (DofE)</li>
                    <li>Badminton</li>
                    <li>Mathematics Tutor (Volunteering)</li>
                    <li>Gym / Fitness</li>
                    <li>Drawing & Art</li>
                    <li>Debate Club</li>
                </ul>

                <p>
                    Among these, completing the Silver Duke of Edinburgh Award was the highlight of my time at sixth form. 
                    Although I explored a variety of activities, the DofE programme, particularly the expedition component, 
                    was by far the most rewarding experience.
                </p>

                <p>
                    Through the programme, I developed new interests such as badminton and hiking, while also rediscovering 
                    my passion for drawing. The expeditions to Swanage and Marlborough were especially memorable, giving me 
                    a deeper appreciation for the outdoors and the natural environment. These experiences helped cultivate 
                    a lasting interest in hiking and exploring nature.
                </p>

                    <figure>
                        <img src="images/swanage.jpg" alt="" />
                        <img src="images/bridge.jpg" alt="" />
                        <img src="images/trees.jpg" alt="" />
                    </figure>
                </article>
            </section>

            <footer>
                Kishal Chhetri © 2026
                <a href="https://makerworld.com/en/@shaztech"> Image Reference </a>
            </footer>
        </div>


    </body>
</html>