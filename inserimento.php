<?php
    include('db.php');
    $query="insert into veicolo(id, titolo, prezzo, descrizione, immagine) values('".$_POST['id']."', '".$_POST['titolo']."', '".$_POST['prezzo']."', '".$_POST['descrizione']."', '".$_POST['immagine']."');";
    $res=mysqli_query($conn,$query);
    if($res===TRUE){
        echo 1;
    }else{
        echo 0;
    }
    
?>