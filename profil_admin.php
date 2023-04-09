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
        <title>Finns - Admin</title>
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
                            <li><a href="profil_admin.php">Profil</a> </li>
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
                    
                    <!-- Anunturi - add, edit, delete -->
                    <div class="admin_left">
                        
                    <?php
                    $comanda = isset($_REQUEST["comanda"]) ? $_REQUEST["comanda"] : NULL;
                    if (isset($comanda)) {
                        switch ($comanda){
                        case 'add':
                            $titlu = $_REQUEST["Titlu"];
                            $link = $_REQUEST["Link"];
                            $sql = "INSERT INTO anunturi(Titlu, Link) VALUES ('$titlu','$link')";
                            if (!mysqli_query($conexiune, $sql)) {
                                die('Error: ' . mysqli_error($conexiune));
                            }
                        break;
                    
                        case 'delete':
                            $id = $_REQUEST["ID"];
                            $sql = "DELETE FROM anunturi WHERE ID='$id'";
                            if (!mysqli_query($conexiune, $sql)) {
                                die('Error: ' . mysqli_error($conexiune));
                            }
                        break;

                        case 'edit':
                            $id = $_REQUEST["ID"];
                            $sql = "SELECT * FROM anunturi WHERE ID='$id'";
                            $result = mysqli_query($conexiune, $sql);
                            if($row = mysqli_fetch_array($result)) {
                                    $titlu = $row['Titlu'];
                                    $link = $row['Link'];
                        }
                        break;

                        case 'update':
                            $id = $_REQUEST["ID"];
                            $titlu = $_REQUEST["Titlu"];
                            $link = $_REQUEST["Link"];
                            $sql = "UPDATE anunturi SET Titlu='$titlu', Link='$link' WHERE ID='$id'";
                            if (!mysqli_query($conexiune, $sql)) {
                                die('Error: ' . mysqli_error($conexiune));
                            }
                        break; 
                    }
                }
                ?>
                <?php
                    $query = "SELECT * FROM anunturi";
                    $result = mysqli_query($conexiune, $query);
                    if(mysqli_num_rows($result)) {
                        print("<table>\n");
                        while($row = mysqli_fetch_array($result)){
                            print("<tr><td><img src='imagini/anunt1.jpeg' alt='Anunt'></td>");
                            print("<td>Titlu: <b>" . $row['Titlu'] . "</b><br>");
                            print("Link: <b>" . $row['Link'] . "</b><br>");
                            print("ID: <b>" . $row['ID'] . "</b><br><br></td>");
                                
                            print("<td><a href='profil_admin.php?comanda=delete&ID=" . $row['ID']. "'><button>Stergere date</button></a><br>");
                            print("<a href='profil_admin.php?comanda=edit&ID=" . $row['ID']. "'><button>Editeaza date</button></a></td>");
                            print("</tr>");
                        }
                        print("</table>");
                    }      
                ?>

                <form action="profil_admin.php" method="post"> 
                    <input name="comanda" type="hidden" value="add" />
                    <table>
                        <tr>     
                            <td>
                                <img src="imagini/anunt1.jpeg" alt="Anunt">
                            </td>
                            <td>
                                Titlu: <input type="text" name="Titlu" pattern="[a-z A-Z]{5,30}" title="Ati introdus un caracter invalid sau TITLUL este prea scurt/lung" required /><br>
                                Link: <input type="text" name="Link" pattern="https?://.+" title="Ati introdus un LINK invalid" required /><br>
                            </td>
                            <td>
                                <input type="submit" value="Adaugare de date"/>
                            </td>
                        </tr>
                    </table>
                </form>

                <form action="profil_admin.php" method="post">
                    <input name="comanda" type="hidden" value="update" />
                    <input name="ID" type="hidden" value="<?php echo $id;?>" />
                    <table>
                        <tr>     
                            <td>
                                <img src="imagini/anunt1.jpeg" alt="Anunt">
                            </td>
                            <td>
                                Titlu: <input type="text" name="Titlu" pattern="[a-z A-Z]{5,30}" title="Ati introdus un caracter invalid sau TITLUL este prea scurt/lung" value="<?php echo $titlu;?>" /><br>
                                Link: <input type="url" name="Link" pattern="https?://.+" title="Ati introdus un LINK invalid" value="<?php echo $link;?>" /><br>
                            </td>
                            <td>
                                <input type="submit" value="Actualizeaza date"/>
                            </td>
                        </tr>
                    </table>
                </form>

                    </div>

                    <!-- Cursuri - add, edit, delete -->
                    <div class="admin_right">
                        
                    <?php
                    $comanda2 = isset($_REQUEST["comanda2"]) ? $_REQUEST["comanda2"] : NULL;
                    if (isset($comanda2)) {
                        switch ($comanda2){
                        case 'add':
                            $numeCurs = $_REQUEST["Curs"];
                            $sql = "INSERT INTO cursuri(Curs) VALUES ('$numeCurs')";
                            if (!mysqli_query($conexiune, $sql)) {
                                die('Error: ' . mysqli_error($conexiune));
                            }
                        break;
                    
                        case 'delete':
                            $id = $_REQUEST["ID"];
                            $sql = "DELETE FROM cursuri WHERE ID='$id'";
                            if (!mysqli_query($conexiune, $sql)) {
                                die('Error: ' . mysqli_error($conexiune));
                            }
                        break;

                        case 'edit':
                            $id = $_REQUEST["ID"];
                            $sql = "SELECT * FROM cursuri WHERE ID='$id'";
                            $result = mysqli_query($conexiune, $sql);
                            if($row = mysqli_fetch_array($result)) {
                                    $numeCurs = $row['Curs'];
                        }
                        break;

                        case 'update':
                            $id = $_REQUEST["ID"];
                            $numeCurs = $_REQUEST["Curs"];
                            $sql = "UPDATE cursuri SET Curs='$numeCurs' WHERE ID='$id'";
                            if (!mysqli_query($conexiune, $sql)) {
                                die('Error: ' . mysqli_error($conexiune));
                            }
                        break; 
                    }
                }
                ?>




                <?php
                    $query = "SELECT * FROM cursuri";
                    $result = mysqli_query($conexiune, $query);
                    if(mysqli_num_rows($result)) {
                        print("<table>\n");
                        while($row = mysqli_fetch_array($result)){
                            print("<tr>");
                            print("<td>Nume curs: <b>" . $row['Curs'] . "</b><br>");
                            print("ID: <b>" . $row['ID'] . "</b><br><br></td>");
                            
                                
                            print("<td><a href='profil_admin.php?comanda2=delete&ID=" . $row['ID']. "'><button>Stergere date</button></a><br>");
                            print("<a href='profil_admin.php?comanda2=edit&ID=" . $row['ID']. "'><button>Editeaza date</button></a></td>");
                            print("</tr>");
                        }
                        print("</table>");
                    }      
                ?>

                <form action="profil_admin.php" method="post"> 
                    <input name="comanda2" type="hidden" value="add" />
                    <table>
                        <tr>     

                            <td class="td-left">
                                Nume curs: <input type="text" name="Curs" pattern="[a-z A-Z]{5,30}" title="Ati introdus un caracter invalid sau NUMELE CURSULUI este prea scurt/lung" required /><br>
                            </td>
                            <td>
                                <input type="submit" value="Adaugare de date"/>
                            </td>
                        </tr>
                    </table>
                </form>

                <form action="profil_admin.php" method="post">
                    <input name="comanda2" type="hidden" value="update" />
                    <input name="ID" type="hidden" value="<?php echo $id;?>" />
                    <table>
                        <tr>     
                            <td>
                                Nume curs: <input type="text" name="Curs" pattern="[a-z A-Z]{5,30}" title="Ati introdus un caracter invalid sau NUMELE CURSULUI este prea scurt/lung" value="<?php echo $numeCurs;?>" /><br>
                            </td>
                            <td>
                                <input type="submit" value="Actualizeaza date"/>
                            </td>
                        </tr>
                    </table>
                </form>


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