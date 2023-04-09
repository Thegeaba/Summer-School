<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--Cursuri nelogat-->

<?php
    require_once "connect.php";
?>

<html>
    <head>
        <title>Finns - Cursuri</title>
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
                    <div class="logo">Finns - Cursuri</div>
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
                            Cursuri si Activitati 
                        </p>
                        <p> 
                            "Finns"
                        </p>
                    </div>

                    <div class="continut">
                     <table>
                        <tr>
                            <td>
                                <p class="cuprins">
                                    &emsp;&emsp; In aceasta vara, copilul tau va putea explora subiecte fascinante printr-o serie de activitati precum cursuri, jocuri de comunicare, proiecte și ateliere artistice, numai la "Finns". Pentru cei mici, programul este conceput pentru a stimula curiozitatea acestora despre lume. Copiii mai mari vor fi indrumati sa-si dezvolte aptitudini precum colaborarea, creativitatea și rezolvarea problemelor. In timp ce-si va face prieteni si se va distra, copilul isi va imbunatati abilitatea de a comunica în limba engleza.
                                </p>
                                <hr>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                    <b>
                                        <p class="cuprins">
                                            Activitati desfasurate in cadrul scolii de vara – "Finns"
                                        </p>
                                    </b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <br>
                                    <b>
                                        <p class="cuprins">
                                            Activitati Saptamanale:
                                        </p>
                                    </b>
                                    <hr>
                                <!--
                                <ul>
                                    
                                    <li class="highlight">
                                        Cursuri de inot
                                    </li>
                                    <li class="highlight">
                                        Club de matematica și lectura
                                    </li>
                                    <li class="highlight">
                                        Cursuri de dans
                                    </li>
                                    <li class="highlight">
                                        Cursuri de limbi straine
                                    </li>
                                    <li class="highlight">
                                        Cursuri de actorie
                                    </li>
                                    <li class="highlight">
                                        Jocuri în parc, vizite la muzee
                                    </li>
                                    <li class="highlight">
                                        Teatru de papusi și marionete
                                    </li>
                                    <li class="highlight">
                                        Fotografie
                                    </li>
                                    <li class="highlight">
                                        Cursuri de pictura
                                    </li>
                                </ul>
                                -->
                                <?php
                                        /** Afisarea cursurilor */
                                        $query = "SELECT * FROM cursuri";
                                        $result = mysqli_query($conexiune, $query);
                                        if(mysqli_num_rows($result)) 
                                        {
                                            print("<table border = '0'><tr>\n");
                                            while($row = mysqli_fetch_array($result)){
                                                print("<td class='highlight'>". $row['Curs']. " </td> \n");
                                            }
                                            print("</tr></table>");
                                        }
                                    ?>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <b>
                                        <p class="cuprins">
                                            Excursii si Tabere:
                                        </p>
                                    </b>
                                <hr>
                                <ul>
                                    <li class="highlight">
                                        Tehnici de supravietuire in natura
                                    </li>
                                    <li class="highlight">
                                        Concurs micii cercetasi
                                    </li>
                                    <li class="highlight">
                                        Concursuri sportive
                                    </li>
                                    <li class="highlight">
                                        Confectionare harta comorii
                                    </li>
                                    <li class="highlight">
                                        Camping week
                                    </li>
                                    <li class="highlight">
                                        Pictura in natura
                                    </li>
                                    <li class="highlight">
                                        Drumetii, excursii și tabere
                                    </li>
                                </ul>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <img draggable="false" src="gif/soare.gif" alt="Sigla" class="sigla">
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