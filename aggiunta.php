<?php


   session_start();

    if(isset($_SESSION['username'])){
        include('db.php');
        $query="INSERT INTO preferiti(utente, veicolo) values('".$_SESSION['username']."', '".$_POST['id']."');";
        $res=mysqli_query($conn,$query);  //or die(mysqli_error($conn));
        if($res===TRUE){
            echo "Aggiunto ai preferiti";
            exit;
        }else{
            echo "Non aggiunto ai preferiti";
            exit;
        }
    }


    ?>