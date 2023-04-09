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
        <title>Finns - User</title>
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
                            <li><a href="index_logat.php">Home</a> </li>
                            <li><a href="cursuri_logat.php">Cursuri</a> </li>
                            <li><a href="traineri_logat.php">Traineri</a> </li>
                            <li><a href="organizatori_logat.php">Organizatori</a></li>
                            <li><a href="noutati_logat.php">Noutati</a> </li>
                            <li><a href="calendar_logat.php">Calendar</a></li>
                            <li><a href="contact_logat.php">Contact</a> </li>
                            <li><a href="profil_user.php">Profil</a> </li>
                        </ul>
                </div>
                <!--HEADER END-->
                
                <!--CONTENT-->
                <div class="content">
                    <div class="welcome">
                        <p>
                            Bine ai venit, <?php echo $user ?> <br>
                            Rol: <?php echo $rol ?> <br>
                            <a href='logout.php'>Logout</a>
                        </p>
                        <p>
                            <img draggable="false" src="gif/soare.gif" alt="Sigla" class="sigla">
                        </p>
                    </div>

                    <!-- Inregistrare USER -->
                    <div class="admin_left">
         
                    <?php 
                    $comanda3 = isset($_REQUEST["comanda3"]) ? $_REQUEST["comanda3"] : NULL;
                    if (isset($comanda3)) {
                        switch ($comanda3){
                        case 'add':
                            $nume = $_REQUEST["Nume"];
                            $prenume = $_REQUEST["Prenume"];
                            $checkbox = $_REQUEST["cursuriAlese"];
                            $chk = "";

                                foreach($checkbox as $item){
                                    $chk .= $item. ", ";
                                }
                                $sql = "INSERT INTO inregistrari(Nume, Prenume, cursuri) VALUES ('$nume', '$prenume', '$chk')";
                                if (!mysqli_query($conexiune, $sql)) {
                                    die('Error: ' . mysqli_error($conexiune));
                                }

                        break;
                        }
                    }
                    ?>

                    <form action="profil_user.php" method="POST">
                            <p>
                                <input name="comanda3" type="hidden" value="add">
                                <br>
                                <input type="text" placeholder="Nume" name="Nume" pattern="[a-z A-Z]{2,30}" title="Ati introdus un caracter invalid" required>
                                <br>
                                <input type="text" placeholder="Prenume" name="Prenume" pattern="[a-z A-Z]{2,30}" title="Ati introdus un caracter invalid" required>
                                <br>
            
                                <?php
                                    $query = "SELECT * FROM cursuri";
                                    $result = mysqli_query($conexiune, $query);
                                    if(mysqli_num_rows($result)) {
                                        while($row = mysqli_fetch_array($result)){
                                            print("<input type='checkbox' name='cursuriAlese[]' value ='". $row['Curs'] ." '>" . $row['Curs'] . "<br>");
                                        }
                                    }      
                                ?>
                                <input type="submit" value="Inregistrare">
                            </p>
                        </form>
                    </div>

                    <!-- Afisare-->
                    <div class="admin_right">
                    <?php
                    $query = "SELECT * FROM inregistrari";
                    $result = mysqli_query($conexiune, $query);
                    if(mysqli_num_rows($result)) {
                        print("<table>\n");
                        while($row = mysqli_fetch_array($result)){
                            print("<tr>");
                            print("<td>Nume: <b>" . $row['Nume'] . "</b><br>");
                            print("<td>Prenume: <b>" . $row['Prenume'] . "</b><br>");
                            print("<td>Cursuri: <b>" . $row['cursuri'] . "</b><br>");
                            print("</tr>");
                        }
                        print("</table>");
                    }      
                ?>
                    
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