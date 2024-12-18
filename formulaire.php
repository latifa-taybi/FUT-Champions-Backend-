<?php
    include 'connexion_database.php'
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
        <div>
            <form method="POST" action="dashboard.php">
                <div class="form">
                    <h3>Entrer les données du joueur</h3>
                    <div>
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="nom" placeholder="Nom complet" required>
                    </div>
                    <div>
                    <label for="photo">Photo</label>
                    <input type="url" id="photo" name="photo" placeholder="URL de la photo" required>
                    </div>
                    <div>
                    <label for="position">Position</label>
                    <select id="position" name="position" required>
                        <option value="GK">GK</option>
                        <option value="CBR">CBR</option>
                        <option value="CBL">CBL</option>
                        <option value="LB">LB</option>
                        <option value="RB">RB</option>
                        <option value="CMR">CMR</option>
                        <option value="CM">CM</option>
                        <option value="CML">CML</option>
                        <option value="LW">LW</option>
                        <option value="RW">RW</option>
                        <option value="ST">ST</option>
                    </select>
                    </div>
                    <div>
                    <label for="nationality">nationality</label>
                    <select name="nationality" id="nationality">
                        <?php
                            $nationality = "SELECT * FROM nationalities";
                            $resultNationalities = $conn -> query($nationality);
                            while($rowNationalities = $resultNationalities -> fetch_assoc()){
                                echo '<option value="'.$rowNationalities['nationality_id'].'">'.$rowNationalities['nationality_id'].'</option>';
                            }
                        ?>
                    </select>
                    </div>
                    <div>
                    <label for="club">club</label>
                    <select name="club" id="club">
                        <?php
                            $club = "SELECT * FROM clubs";
                            $resultclub = $conn -> query($club);
                            while($rowclubs = $resultclub -> fetch_assoc()){
                                echo '<option value="'.$rowclubs['club_id'].'">'.$rowclubs['club_id'].'</option>';
                            }
                        ?>
                    </select>
                    </div>
                    <div>
                    <label for="rating">Rating</label>
                    <input type="number" id="rating" name="rating" placeholder="Rating" required>
                    </div>
                    <div class="statistique">
                    <div class="stat">
                        <label for="pace">Pace</label>
                        <input class="inputStat" type="number" name="pace" id="pace" placeholder="Pace" min="1" max="99" required>
                    </div>
                    <div class="stat">
                        <label for="shooting">Shooting</label>
                        <input class="inputStat" type="number" name="shooting" id="shooting" placeholder="Shooting" required>
                    </div>
                    <div class="stat">
                        <label for="passing">Passing</label>
                        <input class="inputStat" type="number" name="passing" id="passing" placeholder="Passing" required>
                    </div>
                    <div class="stat">
                        <label for="dribbling">Dribbling</label>
                        <input class="inputStat" type="number" name="dribbling" id="dribbling" placeholder="Dribbling" required>
                    </div>
                    <div class="stat">
                        <label for="defending">Defending</label>
                        <input class="inputStat" type="number" name="defending" id="defending" placeholder="Defending" required>
                    </div>
                    <div class="stat">
                        <label for="physical">Physical</label>
                        <input class="inputStat" type="number" name="physical" id="physical" placeholder="Physical" required>
                    </div>
                </div>
                    <!-- <div class="statistiqueGK" style="display:none;">
                    <div class="stat">
                        <label for="diving">Diving</label>
                        <input class="inputStat" type="number" name="diving" id="diving" placeholder="Diving" required>
                    </div>
                    <div class="stat">
                        <label for="handling">Handling</label>
                        <input class="inputStat" type="number" name="handling" id="handling" placeholder="Handling" required>
                    </div>
                    <div class="stat">
                        <label for="kicking">Kicking</label>
                        <input class="inputStat" type="number" name="kicking" id="kicking" placeholder="Kicking" required>
                    </div>
                    <div class="stat">
                        <label for="reflexes">Reflexes</label>
                        <input class="inputStat" type="number" name="reflexes" id="reflexes" placeholder="Reflexes" required>
                    </div>
                    <div class="stat">
                        <label for="speed">Speed</label>
                        <input class="inputStat" type="number" name="speed" id="speed" placeholder="Speed" required>
                    </div>
                    <div class="stat">
                        <label for="positioning">Positioning</label>
                        <input class="inputStat" type="number" name="positioning" id="positioning" placeholder="Positioning" required>
                    </div>
                    </div> -->
                    <button type="submit" name="btnAjout" id="add">Ajouter</button>
                </div>
            </form>
      </section>
      

</body>
</html>