<?php
    if(isset($_POST["AddClub"])){
        $photo_club = $_POST['photo_club'];
        $nom_club = $_POST['nom_club'];

        $stmt = $conn->prepare("INSERT INTO clubs(photo_club, nom_club) VALUES (?,?);");

        $stmt->bind_param("ss",$photo_club, $nom_club);

        $stmt->execute();

        $stmt->close();
    }
?>