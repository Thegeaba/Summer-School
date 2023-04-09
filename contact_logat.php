<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--Contact logat-->

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
        <title>Finns - Contact</title>
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
                    <div class="logo">Finns - Contact</div>
                        <ul>
                            <li><a href="index_logat.php">Home</a> </li>
                            <li><a href="cursuri_logat.php">Cursuri</a> </li>
                            <li><a href="traineri_logat.php">Traineri</a> </li>
                            <li><a href="organizatori_logat.php">Organizatori</a></li>
                            <li><a href="noutati_logat.php">Noutati</a> </li>
                            <li><a href="calendar_logat.php">Calendar</a></li>
                            <li><a href="contact_logat.php">Contact</a> </li>
                            <!-- <li><a href="profil.php">Profil</a> </li> -->
                            <?php
                                switch($rol){
                                    case 'admin':
                                        echo '<li><a href="profil_admin.php">Profil</a> </li>';
                                        break;
                                    case 'user':
                                        echo '<li><a href="profil_user.php">Profil</a> </li>';
                                        break;
                                    }
                            ?>
                        </ul>
                </div>
                <!--HEADER END-->
                
                <!--CONTENT-->
                <div class="content">
                    <div class="welcome">
                        <p> Informatii de Contact </p>
                        <p> "Finns"</p>
                    </div>

                    <div class="continut">
                    <table>
                        <tr>
                            <td>
                                
                                <p class="cuprins"><b> Adresa: </b> Giurca 127 585 <br>
                                    <b> Telefon: </b> +40.721.230781 <br>
                                    <b> Fax: </b> +40.251.412673 <br>
                                    <b> E-mail: </b><b><a href="mailto:finns.scoaladevara@yahoo.com">finns.scoaladevara@yahoo.com</a></b> <br> </p>
                                    <hr>
                                    <p class="cuprins">
                                        <b> Harta:</b>
                                    </p>
                                <img src="imagini/harta.png" alt="locatie_exacta" class="harta">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <img draggable="false" src="gif/soare.gif" alt="Sigla" class="sigla">
                                </p>
                            </td>
                        </tr>


                    </table>
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