<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--Noutati logat-->

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
        <title>Finns - Noutati</title>
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
                    <div class="logo">Finns - Noutati</div>
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
                        <p> Noutati </p>
                        <p> "Finns"</p>
                    </div>

                    <div class="continut">
                        <!--
                    <table>
                        <tr>
                            <td>
                                <img src="imagini/anunt1.jpeg" alt="Anunt" class="noutate">
                            </td>
                            <td>
                                <b>Noutate</b><br><br>
                                &ensp;<a href="https://www.edventure.ro/engleza/scoala-de-vara/" target="_blank">Citește mai mult &#9654;</a>
                            </td>               
                        </tr>
                        <tr>
                            <td>
                                <img src="imagini/anunt2.png" alt="Anunt" class="noutate">
                            </td>
                            <td>
                                <b>Noutate</b><br><br>
                                &ensp;<a href="https://wonderkids.ro/scoala-de-vara/" target="_blank">Citește mai mult &#9654;</a>
                            </td>               
                        </tr>
                        <tr>
                            <td>
                                <img src="imagini/anunt3.jfif" alt="Anunt" class="noutate">
                            </td>
                            <td>
                                <b>Noutate</b><br><br>
                                &ensp;<a href="https://olgagudynn.ro/gradinita-olga-gudynn/scoala-de-vara/" target="_blank">Citește mai mult &#9654;</a>
                            </td>               
                        </tr>
                        <tr>
                            <td>
                                <img src="imagini/anunt4.png" alt="Anunt" class="noutate">
                            </td>
                            <td>
                                <b>Noutate</b><br><br>
                                &ensp;<a href="https://smart-education.ro/smart-education/" target="_blank">Citește mai mult &#9654;</a>
                            </td>               
                        </tr>
                        <tr>
                            <td>
                                <img src="imagini/anunt5.png" alt="Anunt" class="noutate">
                            </td>
                            <td>
                                <b>Noutate</b><br><br>
                                &ensp;<a href="http://inf.ucv.ro/" target="_blank">Citește mai mult &#9654;</a>
                            </td>               
                        </tr>
                                -->

                                <?php
                        /** Afisarea noutatilor */
                        $query = "SELECT * FROM anunturi";
                        $result = mysqli_query($conexiune, $query);
                        if(mysqli_num_rows($result)) {
                            print("<table border='0'>\n");
                            while($row = mysqli_fetch_array($result)){
                                print("<tr>\n");
                                // print("<td>" . $row['id']. "</td>\n");
                                print("<td> <img src ='imagini/anunt1.jpeg' alt='Anunt' class='noutate'> </td>");
                                print("<td>" . $row['Titlu']. "<br>\n");
                                print("<a href=" . $row['Link']. " target='_blank'>Citeste mai mult &#9654; </a></td>\n");
                                print("</tr>\n");
                            }
                            print("</table>");
                        }
                        ?>

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