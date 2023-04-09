<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--Home logat-->

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
        <title>Finns - Scoala de Vara</title>
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
                    <div class="logo">Finns - Home </div>
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
                            Bine ati venit !
                        </p>
                        <p> 
                            "Finns" 
                        </p>
                    </div>

                    <div class="continut">

                        <table>
                            <tr>
                                <td>
                                    <p class="titlu">
                                        Before & After School – O investitie in educatia copilului tau!
                                    </p>
                                </td>
                                <td>
                                    <p class="titlu">
                                        Impreuna ii putem ajuta pe cei mici sa creasca frumos si creativ!
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="cuprins">“Finns” Before and After School vine in ajutorul parintilor! Am creat programe speciale pentru cei mici pentru a-i sprijini sa se dezvolte armonios. Punem la dispozitia parintilor diverse pachete si programe, pentru a ne asigura ca fiecare copil are parte de o experienta educationala cat mai benefica.</p>
                                </td>
                                <td>
                                    <p class="cuprins">Din atentie pentru detalii, organizam cluburi de dezvoltare si invatare, precum si activitati recreative. Cooperam eficient cu parintii despre orice eveniment si activitate. Copiii vor beneficia de o masa pe zi sau doua mese pe zi plus gustare, in functie de programul ales.</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                    <ul>
                                        <li> <p class="cuprins"> <b>Scoala de Vara 2022 </b> se adreseaza copiilor din clasele 1-4 si se desfasoara in perioada 4-22 iulie si 8-26 august 2021. </p></li>
                                        <li> <p class="cuprins"> <b>Programul scolii</b> de vara este de luni pana vineri, de la ora 9:00 la 17:30. </p></li>
                                        <li> <p class="cuprins"> <b>Pretul</b> este 735 lei pe saptamana. Membrii aceleiasi familii, cei care vin printr-o recomandare si cursantii beneficiaza de 5% reducere. </p></li>
                                        <li> <p class="cuprins"> Pretul <b>include</b> masa de pranz completa, gustarea, excursiile, atelierele creative si toate activitatile in limba engleza. </p></li>
                                    </ul>
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    
                                    <p class="cuprins">
                                        <b>Programul orientativ al unei zile</b>: La ora 9:00 ne intalnim la sediul nostru si incepem ziua cu super <b>activitati in limba engleza</b> pregatite de profesorii nostri. Apoi, mergem la una din cele trei locatii partenere*, unde vom servi un pranz complet si delicios. Acolo vom participa la o multime de <b>ateliere creative</b>, ne vom juca, vom face sport si nu in ultimul rand ne vom relaxa in aer liber! In jurul orei 16:00 vom servi o gustare, dupa care ne vom intoarce la centru, unde incepand cu ora 17:00 ii asteptam pe parinti. Copiii vor avea parte de o <b>surpriza</b> in fiecare zi de vineri!
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
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