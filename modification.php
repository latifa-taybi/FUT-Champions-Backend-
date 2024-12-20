<?php
    include 'connexion_database.php';
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
            <form method="POST" action="updateJoueur.php">
                <div class="form">
                <h3>Modifier les données du joueur</h3>
                    <?php include 'form.php' ?>
                <input type="hidden" name="id" value="<?php echo $_GET['id']?>">

                    <button type="submit" name="btnEdit" id="add">Modifier</button>
                </div>
            </form>
      </section>
      

</body>
</html>