<?php
    include 'connexion_database.php';
    
    if(isset($_POST["btnAjout"])){
        $photo = $_POST['photo'];
        $nom = $_POST['nom'];
        $rating = $_POST['rating'];
        $position = $_POST['position'];
        $pace = $_POST['pace'];
        $shooting = $_POST['shooting'];
        $passing = $_POST['passing'];
        $dribbling = $_POST['dribbling'];
        $defending = $_POST['defending'];
        $physical = $_POST['physical'];
        $nationality = $_POST['nationality'];
        $club = $_POST['club'];
        
        $stmt = $conn->prepare("INSERT INTO joueurs(Photo, Nom, Rating, Position, Pac, Sho, Pas, Dri, Def, Phy, nationality_id, club_id ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssisiiiiiiii",$photo, $nom, $rating, $position, $pace, $shooting, $passing, $dribbling, $defending, $physical, $nationality, $club);
        $stmt->execute();
        $stmt->close();
        header("location: dashboard.php");
    }
?>