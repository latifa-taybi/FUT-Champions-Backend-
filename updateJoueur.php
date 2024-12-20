<?php
    include 'connexion_database.php';
    if(isset($_POST["btnEdit"])){
    //    echo  $_GET["id"];
    echo $id = $_POST['id'];

        echo $photo = $_POST['photo'];
        echo " | ";
        echo $nom = $_POST['nom'];
        echo " | ";
        echo $rating = $_POST['rating'];
        echo " | ";
        echo $position = $_POST['position'];
        echo " | ";
        echo $pace = $_POST['pace'];
        echo " | ";
        echo $shooting = $_POST['shooting'];
        echo " | ";
        echo $passing = $_POST['passing'];
        echo " | ";

        echo $dribbling = $_POST['dribbling'];
        echo " | ";
        echo $defending = $_POST['defending'];
        echo " | ";
        echo $physical = $_POST['physical'];
        echo " | ";
        echo $nationality = $_POST['nationality'];
        echo " | ";
        echo $club = $_POST['club'];
        

        $stmt = $conn->prepare("UPDATE joueurs SET Photo = ?, Nom = ?, Rating = ?, Position = ?, Pac = ? , Sho = ?, Pas = ?, Dri = ?, Def = ?, Phy = ?, nationality_id = ?, club_id = ? WHERE ID = ?");
        $stmt->bind_param("ssisiiiiiissi",$photo, $nom, $rating, $position, $pace, $shooting, $passing, $dribbling, $defending, $physical, $nationality, $club, $id);
        
        $stmt->execute();
        $stmt->close();
        header('location: dashboard.php');
    }
?>