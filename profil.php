<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--Profil-->
<?php
    require_once "connect.php";
    
    session_start();
    if(!isset($_SESSION['logat'])){
        header("Location:index.php");
        exit;
    } 
    else {
        $user = $_SESSION['logat'];
        $rol = $_SESSION['rol'];
    }
?>

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
                    <div class="logo">Finns-Autentificare </div>
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="cursuri.php">Cursuri</a> </li>
                            <li><a href="traineri.php">Traineri</a> </li>
                            <li><a href="organizatori.php">Organizatori</a></li>
                            <li><a href="noutati.php">Noutati</a> </li>
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="contact.php">Contact</a> </li>
                            <li><a href="profil.php">Profil</a> </li>
                        </ul>
                </div>
                <!--HEADER END-->
                
                <!--CONTENT-->
                <div class="content">
                    <div class="welcome">
                        <p>
                            Bine ai venit, <?php echo $user ?> <br>
                            Rol: <?php echo $rol ?> <br>
                            <a href='logout.php' class="logoutbtn">Logout</a>
                        </p>
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