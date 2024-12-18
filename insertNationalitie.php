<?php
    if(isset($_POST["AddNationalities"])){
        $photo_nationality = $_POST['photo_nationality'];
        $nom_nationality = $_POST['nom_nationality'];

        $stmt = $conn->prepare("INSERT INTO Nationalities(photo_nationality, nom_nationality) VALUES (?,?);");

        $stmt->bind_param("ss",$photo_nationality, $nom_nationality);

        $stmt->execute();

        $stmt->close();
    }
?>