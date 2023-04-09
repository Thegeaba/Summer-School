<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--Organizatori logat-->

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
        <title>Finns - Organizatori</title>
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
                    <div class="logo">Finns - Organizatori</div>
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
                        <p>
                            Informatii detaliate - Organizare
                        </p>
                        <p> 
                            "Finns" 
                        </p>
                    </div>

                    <div class="continut">
                    <table>

                        <tr>
                            <td>
                                <p class="cuprins2"><b>&emsp;&emsp; Sa va povestim mai multe despre Scoala de Vara 2021: </b> Anul acesta avem trei parteneri cu ajutorul carora vom organiza in siguranta acest program educational: <b>Gradina Sevaletelor</b>, <b>In Picioarele Goale</b> si <b>The Kid</b>. </p>
                                <hr>
                                <p class="cuprins2">&emsp;&emsp; Locatiile au fost atent alese pentru a putea desfasura <b>activitati si ateliere in aer liber in fiecare zi</b>, dar si pentru posibilitatea de a colabora cu oameni pasionati, care vor facilita jocuri si multe ateliere creative si distractive pentru copii.</p>
                                <hr>
                                <p class="cuprins2">&emsp;&emsp; Facem tot posibilul si ne dorim foarte mult ca cei mici sa se simta excelent in aceste saptamani, de aceea in zilele de vineri copiii vor avea parte de o surpriza! Avem pregatite vizite la muzee precum Muzeul Cotroceni sau Muzeul Militar, cat si excursii in locuri speciale precum Muzeul-Atelier Scoala de la Piscu (unde vom invata olarit), Moara de Hartie de la Comana (unde vom participa la un atelier de facut hartie) si Gradina Rustica din Balteni (unde vom participa la mai multe ateliere).</p>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p class="cuprins2">Scoala de Vara "Finns" include o multime de activitati pentru copii. Iata cum ar putea arata activitatile unei saptamani:</p>
                                
                                <ul>
                                    <li>
                                        <p class="cuprins2">&emsp;<b>La “Gradina Sevaletelor”</b> – In saptamanile pe care le vom petrece aici, copiii vor avea parte de experiente minunate! Participam la mai multe ateliere de actorie, experimente stiintifice si activitati creative (pictura, desen), dar si la multe jocuri si competitii distractive, care vor fi pe placul copiilor.</p>
                                    </li>
                                    <li>
                                        <p class="cuprins2">&emsp;<b>La “The Kid”</b> – In saptamana pe care o vom petrece aici vom avea parte de multa voie buna intr-un spatiu plin de culoare si verdeata. Vom face Zumba si alte tipuri de dans, vom face pizza, vom lua parte la activitatile pregatite de animatori, si vom participa la diverse jocuri si ateliere pentru copii.</p>
                                    </li>
                                    <li>
                                        <p class="cuprins2">&emsp;<b>La “In Picioarele Goale”</b> – In saptamanile pe care le vom petrece aici avem pregatite multe jocuri de improvizatie si creativitate precum challenges / puzzles, activitati creative (Orasul de lut si Pictura pe canvas), dar si jocuri sportive precum trasee cu obstacole, intreceri pe echipe si multe altele!</p>
                                    </li>

                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="highlight">
                                <br>
                                DE RETINUT !
                                <hr>
                                Locatiile si activitatile planificate pot suferi modificari din motive independente de noi.
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="cuprins2">&emsp;&emsp; Vara aceasta va fi deosebit de frumoasa! <b>Haideti sa ne bucuram impreuna de vara</b>, sa invatam engleza, sa socializam, sa ne jucam in aer liber si sa ne simtim excelent !</p>
                            </td>
                        </tr>
                    </table>
                    </div>


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