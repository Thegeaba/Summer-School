<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--Autentificare-->

<html>
    <head>
        <title>Finns - Autentificare</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta name="author" content="Călinescu Ionuț-Cristian">
        <meta name="keywords" content="site, web, scoala, vara">
        <meta name="description" content="Pagina web a scolii de vara 'Finns'"> 
    </head>

    <body>


        <section>

            <div class="pagina">
                <!--HEADER-->
                <div class="meniu">
                    <div class="logo">Finns - Autentificare </div>
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="cursuri.php">Cursuri</a> </li>
                            <li><a href="traineri.php">Traineri</a> </li>
                            <li><a href="organizatori.php">Organizatori</a></li>
                            <li><a href="noutati.php">Noutati</a> </li>
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="contact.php">Contact</a> </li>
                            <li><a href="autentificare.php">Login</a> </li>
                        </ul>
                </div>
                <!--HEADER END-->
                
                <!--CONTENT-->
                <div class="content">
                    <div class="welcome">
                        <p>
                            Autentificare
                        </p>
                        <p> 
                            "Finns" 
                        </p>
                    </div>
                    <div class="login"> 
                        <form action="login.php" method="POST">
                            <p>
                                <input type="text" placeholder="Nume de utilizator" name="nume" required>
                                <input type="password" placeholder="Parola" name="parola" required>
                                <input type="submit" name="butonLogin" value="Login">
                            </p>
                        </form>
                        <p>
                            <img draggable="false" src="gif/soare.gif" alt="Sigla" class="sigla">
                        </p>
                    </div>
                </div>
                <!--CONTENT END-->

                <!--FOOTER-->
                <div class="footer">
                    <p class="subsol">
                        Copyright © 2022 Călinescu Ionuț-Cristian, All rights reserved.
                    </p>
                </div>
                <!--FOOTER END-->
             </div>

        </section>

    </body>
</html>