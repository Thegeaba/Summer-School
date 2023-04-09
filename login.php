<?php
    session_start();
    require_once "connect.php";

    if(isset($_POST["butonLogin"])){
        $nume = $_POST["nume"];
        $parola = $_POST["parola"];

        $query = "SELECT * FROM utilizatori WHERE NumeUtilizator='$nume' AND Parola='$parola'";

        if(!$result = mysqli_query($conexiune, $query)){
            die('Eroare: ' . mysqli_error($conexiune));
        }
        
        if(mysqli_num_rows($result)){
           while($row = mysqli_fetch_assoc($result)){    
                $_SESSION['logat'] = $row["NumeUtilizator"];
                $_SESSION['rol'] = $row["Rol"];
                
                $rol = $_SESSION['rol'];
                switch($rol){
                    case 'admin':
                        header('Location: profil_admin.php');
                        break;
                    case 'user':
                        header('Location: profil_user.php');
                        break;
                }
            }
        }
        else {
            echo "<script type='text/javascript'>alert('Date incorecte!'); window.location='autentificare.php'; </script>";
        }
        
    }
?>