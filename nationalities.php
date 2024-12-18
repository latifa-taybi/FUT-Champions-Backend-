<?php
    include 'connexion_database.php';
    include 'insertNationalitie.php'
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
        <div style="width: 300px; height: 100vh; background-color: rgb(61, 79, 104); ">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="formulaire.php">Formulaire</a></li>
                <li><a href="#">Statistique</a></li>
                <li><a href="clubs.php">Clubs</a></li>
                <li><a href="nationalities.php">Nationalités</a></li>
            </ul>
        </div>
        <div style="display: flex; flex-direction:column; ">
            <form method="POST" action="nationalities.php">
                <div class="form">
                    <h3>Entrer les informations des nationalités</h3>
                    <div>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="nom_nationality" placeholder="Nom complet" required>
                    </div>
                    <div>
                    <label for="photo">Flag</label>
                    <input type="url" id="photo" name="photo_nationality" placeholder="URL de la photo" required>
                    </div>
                    
                    <button type="submit" name="AddNationalities" id="add">Ajouter</button>
                </div>
            </form>
            <div style="width: 100%;" class="tableau">
                <table class="table table table-striped table-bordered" id="table">
                    <thead>
                        <tr>
                        <th scope="col">Nationality_id</th>
                        <th scope="col">photo_nationality</th>
                        <th scope="col">nom_nationality</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            
                            $sql_Nationalities = "SELECT * FROM nationalities";
                            $resultNationalities = $conn -> query($sql_Nationalities);

                            while($rowNationalities = $resultNationalities -> fetch_assoc()){
                                echo "
                                <tr>
                                    <td>$rowNationalities[nationality_id]</td>
                                    <td><img src=".$rowNationalities["photo_nationality"]."></td>           
                                    <td>$rowNationalities[nom_nationality]</td>
                                    <td><a href=\"modificationNationalities.php?id=".$rowNationalities["nationality_id"]."\"><button type=\"button\" name=\"edit\" class=\"btn btn-outline-primary\">Edit</button></a></td>
                                    <td><a href=\"suppressionNationalities.php?id=".$rowNationalities["nationality_id"]."\"><button type=\"button\" name=\"delete\" class=\"btn btn-outline-danger\">Delete</button></a></td>
                                </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
 


      </section>
      

</body>
</html>