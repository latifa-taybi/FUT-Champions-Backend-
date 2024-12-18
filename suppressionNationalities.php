<?php
    include 'connexion_database.php';

    $deleteNationality = "DELETE FROM nationalities WHERE nationality_id = $_GET[id]";
    $resultDeleteNationality = $conn -> query($deleteNationality);
    header("location:nationalities.php");
?>