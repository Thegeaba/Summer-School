<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--Traineri logat-->

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
        <title>Finns - Traineri</title>
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
                    <div class="logo">Finns - Traineri</div>
                        <ul>
                            <li><a href="index_logat.php">Home</a> </li>
                            <li><a href="cursuri_logat.php">Cursuri</a> </li>
                            <li><a href="traineri_logat.php">Traineri</a> </li>
                            <li><a href="organizatori_logat.php">Organizatori</a></li>
                            <li><a href="noutati_logat.php">Noutati</a> </li>
                            <li><a href="calendar_logat.php">Calendar</a></li>
                            <li><a href="contact_logat.php">Contact</a> </li>
                            <!--<li><a href="profil.php">Profil</a> </li> -->
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
                        <p> Traineri ai scolii noastre </p>
                        <p> 
                            "Finns" 
                        </p>
                    </div>

                    <div class="continut">
                    <table border="1">
                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Greaca Marian</b><br>
                                Cursuri: <b>Informatica</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:greaca.marian@yahoo.com">greaca.marian@yahoo.com</a></b>
                            </td>
                        </tr>

                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Iancu Stefan</b><br>
                                Cursuri: <b>Engleza, germana</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:iancu.stefan@yahoo.com">iancu.stefan@yahoo.com</a></b>
                            </td>
                        </tr>

                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Stefanescu Miruna</b><br>
                                Cursuri: <b>Engleza, franceza</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:stefanescu.miruna@yahoo.com">stefanescu.miruna@yahoo.com</a></b>
                            </td>
                        </tr>

                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Kylian Mbappé</b><br>
                                Cursuri: <b>Sport</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:kylian.mbappe@yahoo.com">kylian.mbappe@yahoo.com</a></b>
                            </td>
                        </tr>

                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Mica Diana</b><br>
                                Cursuri: <b>Sport, dansuri, muzica</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:mica.diana@yahoo.com">mica.diana@yahoo.com</a></b>
                            </td>
                        </tr>

                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Gospodaru Daniel</b><br>
                                Cursuri: <b>Inot</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:godpodaru.daniel@yahoo.com">gospodaru.daniel@yahoo.com</a></b>
                            </td>
                        </tr>

                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Diaconu Andrew</b><br>
                                Cursuri: <b>Matematica</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:diaconu.andrew@yahoo.com">diaconu.andrew@yahoo.com</a></b>
                            </td>
                        </tr>

                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Firicel Andreea</b><br>
                                Cursuri: <b>Lectura, teatru, actorie</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:firicel.andreea@yahoo.com">firicel.andreea@yahoo.com</a></b>
                            </td>
                        </tr>

                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Zaulet Maria</b><br>
                                Cursuri: <b>Pictura in natura, fotografie</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:zaulet.maria@yahoo.com">zaulet.maria@yahoo.com</a></b>
                            </td>
                        </tr>
                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Bobonete Mihai</b><br>
                                Cursuri: <b>Tehnici de supravietuire</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:bobonete.mihai@yahoo.com">bobonete.mihai@yahoo.com</a></b>
                            </td>
                        </tr>

                        <tr class="highlight">     
                            <td>
                                <img src="imagini/profesor.png" alt="Poza profesor">
                            </td>
                            <td>
                                Nume: <b>Palarie Claudiu</b><br>
                                Cursuri: <b>Ecologie</b> <br>
                            </td>
                            <td>
                                Telefon de serviciu: <b>+40.251.413728</b><br>
                                Fax de serviciu: <b>+40.251.412673</b><br>
                                E-mail: <b><a href="mailto:palarie.claudiu@yahoo.com">palarie.claudiu@yahoo.com</a></b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
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