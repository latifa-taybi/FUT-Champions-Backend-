
<?php
    include 'connexion_database.php';

    global $conn;
    $stmt = $conn->prepare("SELECT joueurs.*, nationalities.nom_nationality, clubs.nom_club 
    FROM joueurs NATURAL JOIN nationalities 
    NATURAL JOIN clubs WHERE ID = ?;");
    $stmt->bind_param("i", $_GET["id"]); 
    $stmt->execute();

    $result = $stmt->get_result();
    $player = $result->fetch_assoc();

    $stmt->close();
?>