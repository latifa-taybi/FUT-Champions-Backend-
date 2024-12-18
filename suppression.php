<?php
    include 'connexion_database.php';

    $delete = "DELETE FROM joueurs WHERE ID = $_GET[id]";
    $resultDelete= $conn -> query($delete);
    header("location:dashboard.php");
?>