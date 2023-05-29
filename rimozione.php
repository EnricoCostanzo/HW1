<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_POST['id'])){
        include('db.php');
        
        $username=mysqli_real_escape_string($conn,$_SESSION['username']);
        $id=mysqli_real_escape_string($conn,$_POST['id']);

        $query="DELETE FROM preferiti WHERE utente='$username' AND veicolo='$id';";
        $res=mysqli_query($conn,$query);
        mysqli_close($conn);
        echo "rimosso dai preferiti";
        exit;
    }
    echo "non rimosso dai preferiti";
    exit;
    
    ?>