<?php
    require_once('globals.php');
    require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico">
    <title>MovieStar</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="<?= $BASE_URL ?>search.php" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
            <!-- <?php //if($userData): ?> -->
                <li class="nav-item">
                <a href="<?= $BASE_URL ?>newmovie.php" class="nav-link">
                    <i class="far fa-plus-square"></i> Incluir Filme
                </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $BASE_URL ?>dashboard.php" class="nav-link">Meus Filmes</a>
                </li>
                <li class="nav-item">
                <a href="<?= $BASE_URL ?>editprofile.php" class="nav-link bold">
                    
                </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $BASE_URL ?>logout.php" class="nav-link">Sair</a>
                </li>
            <!-- <?//php else: ?> -->
                <li class="nav-item">
                    <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                </li>
            <!-- <?php //endif; ?> -->
            </ul>
        </div>
        </nav>
    </header>



    <footer id="footer">
    <div id="social-container">
      <ul>
        <li>
          <a href="#"><i class="fab fa-facebook-square"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </li>
      </ul>
    </div>
    <div id="footer-links-container">
      <ul>
        <li><a href="#">Adicionar filme</a></li>
        <li><a href="#">Adicionar crítica</a></li>
        <li><a href="#">Entrar / Registrar</a></li>
      </ul>
    </div>
    <p>&copy; 2022 Hora de Codar</p>
  </footer>
     <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.js" integrity="sha512-KCgUnRzizZDFYoNEYmnqlo0PRE6rQkek9dE/oyIiCExStQ72O7GwIFfmPdkzk4OvZ/sbHKSLVeR4Gl3s7s679g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>