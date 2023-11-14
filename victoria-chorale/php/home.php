<html lang="en">
    <head>
        <title>Victoria Chorale</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">  
        <link type="text/css" rel="stylesheet" href="../css/common.css">
        <link type="text/css" rel="stylesheet" href="../css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Lato:wght@100;300;400;700&family=Merriweather:wght@300;400;700&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8df8f05bf5.js" crossorigin="anonymous"></script>
    </head>
    <body class="flex_col">
        <div id="nav_bar" class="flex justify screen_width fixed">
            <div id="nav_box" class="flex align max_width">
                <img src="../img/vclogo.jpg">
                <ul id="nav_list" class="flex">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="repertoire.php">Repertoire</a></li>
                    <li><a href="upcoming.php">Upcoming</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div id="nav_blank"></div>
        <script src="../js/navScroll.js"></script>

        <div id="landing" class="flex justify screen_width relative">
            <img src="../img/landing.jpg">
            <div id="landing_box" class="flex_col justify align max_width absolute">
                <p style="margin: 0; font-size: 72px; font-weight: 400;">Victoria Chorale</p>
                <p style="margin: 0; font-size: 28px; font-weight: 400;">No Man is an Island</p>
            </div>
        </div>

        <div id="about" class="flex justify screen_width">
            <div id="about_box" class="flex_col justify max_width">
                <p>
                    victoria chorale &nbsp;&nbsp; / &nbsp;&nbsp; home
                </p>
                <div class="flex">
                    <div id="about_brief" class="flex_col justify">
                        <p style="font-size: 36px; margin: 0 0 10px 0;">Origins</p>
                        <hr width="40%" align="left">
                        <p style="font-size: 18px;">Established in 1988, the Victoria Chorale comprises the alumni of both the Victoria School and the Victoria Junior College. The choir members come from all walks of life, and are bonded by their passion for singing. Under the baton of esteemed conductor, Mr. Nelson Kwei, the choir performs an extensive repertoire, ranging from sacred Latin works to contemporary Asian songs, and light jazz pieces. </p>
                        <a href="about.php" style="margin-top: 20px;"><button>
                            Discover more
                        </button></a>
                    </div>
                    <img src="../img/olderpic.JPG" style="box-shadow: 2px 4px 5px rgb(120, 120, 120)">                    
                </div>
            </div>
        </div>

        <div id="notables" class="flex_col align screen_width">
            <div class="max_width" style="padding-bottom: 20px;">
                <p style="font-size: 36px; text-align: right; margin: 0 0 10px 0;">Notable Events</p>
                <hr width="20%" align="right">
            </div>
            <div id="notables_box" class="max_width relative">
                <div class="notable_slides fade">
                    <h2>Venue 1</h2>
                    <img src="../img/notable1.jpg" style="width: 100%;">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="notable_slides fade">
                    <h2>Venue 2</h2>
                    <img src="../img/notable2.jpg" style="width: 100%;">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="notable_slides fade">
                    <h2>Venue 3</h2>
                    <img src="../img/notable3.jpg" style="width: 100%;">
                    <p>Lorem Ipsum</p>
                </div>
                <a id="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a id="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
        <script src="../js/slideShow.js"></script> 

        <div id="contact" class="flex justify screen_width">
            <div id="contact_box" class="flex align max_width">
                <form>
                    <table id="contact_table">
                        <tr>
                            <td><p style="color: white; font-size: 36px; padding: 0 0 10px 0;">Contact Us</p></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Name*" required></td>      
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Organization"></td>
                        </tr>
                        <tr>
                            <td><input type="email" placeholder="Email*" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Subject*" required></td>
                        </tr>
                        <tr>
                            <td><textarea placeholder="Send us a message."></textarea></td>
                        </tr>
                        <tr style="height: 100px;">
                            <td><input id="contact_submit" type="submit" value="Send"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

        <div id="footer" class="flex justify screen_width">
            <div id="footer_box" class="flex align max_width">
                <div id="socials" class="flex_col">
                    <p>Socials</p>
                    <div class="flex">
                        <i class="fa-brands fa-facebook fa-2x"></i>
                        <i class="fa-brands fa-instagram fa-2x"></i>
                        <i class="fa-brands fa-twitter fa-2x"></i>
                    </div>
                </div>
                <div id="footer_nav" class="flex_col">
                    <p>Navigation</p>
                    <ul id="footer_list">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="repertoire.php">Repertoire</a></li>
                        <li><a href="upcoming.php">Upcoming</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div id="footer_contact" class="flex_col">
                    <p>Contact</p>
                    <span><strong>Phone</strong></span>
                    <span>+65 91234567</span>
                    <span><strong>Email</strong></span>
                    <span><a href="mailto:name@email.com"><i>victoriachorale@gmail.com</i></a></span>
                </div>
            </div>
        </div>
    </body>
</html>