<?php
    include 'connexion_database.php';
    include 'insertJoueur.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body style="background-color: rgba(22, 21, 21, 0.822);">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary"  class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
              <img src="./images/fut-logo-design-inspiration-for-a-unique-identity-modern-elegance-and-creative-design-watermark-your-success-with-the-striking-this-logo-vector-removebg-preview.png" alt="" width="50px">
              <h1 class="navbar-brand" href="#">FUT-CHAMPIONS</h1>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
              </div>
            </div>
          </nav>
    </header>

    <section id="formulaire">
        <div style="width: 300px; height: 100rem; background-color: rgb(61, 79, 104); ">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="formulaire.php">Formulaire</a></li>
                <li><a href="#">Statistique</a></li>
                <li><a href="clubs.php">Clubs</a></li>
                <li><a href="nationalities.php">Nationalités</a></li>
            </ul>
        </div>
        <div style="width: 100%;" class="tableau">
            <table class="table table table-striped table-bordered" id="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Position</th>
                    <th scope="col">Pac</th>
                    <th scope="col">Sho</th>
                    <th scope="col">Pas</th>
                    <th scope="col">Dri</th>
                    <th scope="col">Def</th>
                    <th scope="col">Phy</th>
                    <th scope="col">Flag</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delet</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $sql = "SELECT ID, Photo, Nom, Rating, Position, Pac, Sho, Pas, Dri, Def, Phy, photo_nationality, photo_club 
                                FROM joueurs
                                JOIN clubs ON joueurs.club_id = clubs.club_id
                                JOIN nationalities ON joueurs.nationality_id = nationalities.nationality_id;";
                        $result = $conn -> query($sql);

                        while($row = $result -> fetch_assoc()){
                            echo "
                            <tr>
                                <td>$row[ID]</td>
                                <td><img src=".$row["Photo"]."></td>           
                                <td>$row[Nom]</td>
                                <td>$row[Rating]</td>
                                <td>$row[Position]</td>
                                <td>$row[Pac]</td>
                                <td>$row[Sho]</td>
                                <td>$row[Pas]</td>
                                <td>$row[Dri]</td>
                                <td>$row[Def]</td>
                                <td>$row[Phy]</td>
                                <td><img src=".$row["photo_nationality"]."></td>
                                <td><img src=".$row["photo_club"]."></td>
                                <td><a href=\"formulaire.php?id=".$row["ID"]."\"><button type=\"button\" name=\"edit\" class=\"btn btn-outline-primary\">Edit</button></a></td>
                                <td><a href=\"suppression.php?id=".$row["ID"]."\"><button type=\"button\" name=\"delete\" class=\"btn btn-outline-danger\">Delete</button></a></td>
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
      </section>
      

</body>
</html>