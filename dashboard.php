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
        <div style="width: 300px; height: 100vh; background-color: rgb(61, 79, 104); ">
            <ul>
                <li><a href="#">Joueurs</a></li>
                <li><a href="formulaire.php">Formulaire</a></li>
                <li><a href="#">Statistique</a></li>
            </ul>
        </div>
        <div style="width: 100%;" class="tableau">
            <table class="table table-dark table-striped" id="table">
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

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname= "fut_champions";

                        $conn = new mysqli($servername , $username , $password , $dbname );
                            
                        if($conn->connect_error){
                            die("erreur de connexion" . $conn->connect_error);
                        }

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
                            
                            $stmt = $conn->prepare("INSERT INTO joueurs(photo, Nom, Rating, Position, Pac, Sho, Pas, Dri, Def, Phy, nationality_id, club_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);");

                            $stmt->bind_param("ssisiiiiiiss",$photo, $nom, $rating, $position, $pace, $shooting, $passing, $dribbling, $defending, $physical, $nationality, $club);

                            $stmt->execute();

                            $stmt->close();
                            $conn->close();
                        }   
                        
                        $sql = "SELECT * FROM joueurs";
                        $result = $conn -> query($sql);

                        while($row = $result -> fetch_assoc()){
                            echo "
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            ";
                        }
                        
                        
                    ?>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
      </section>
      

</body>
</html>