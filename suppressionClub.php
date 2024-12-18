<?php
    include 'connexion_database.php';

    $deleteClub = "DELETE FROM clubs WHERE club_id = $_GET[id]";
    $resultDeleteClub= $conn -> query($deleteClub);
    header("location:clubs.php");
?>