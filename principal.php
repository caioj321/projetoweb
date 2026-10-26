<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['nome_usuario'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <link rel="stylesheet" href="principal.css">

</head>
<body>

<nav class="navbar md:navbar-expand bg-1">
    
  <div class="container-fluid">
    <img src="https://img.icons8.com/ios-filled/50/open-book.png" alt="...">
    <a class="navbar-brand" href="#">Library of Ruina</a>
    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" aria-hidden="true"></span>
    </button>
    <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
      <div class="drawer-header">
        <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
      </div>
      <div class="drawer-body mb-2 md:mb-0">
      </div>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="position-absolute top-0 end-0">
                <div class="mt-4">
                <button class="btnSair btn-outline theme-primary"><a href="logout.php">Sair</a>
                </button></p>
                </div>
            </div>
        </li>
      </ul>
    </dialog>
  </div>
</nav>



    <div class="position-absolute top-50 start-50 translate-middle"><h1>Bem vindo, <?php echo $_SESSION['nome_usuario']; ?></h1>
    <p class="text-center"><button onclick="location='adicionar.php'" class="btnVerLivros btn-outline theme-primary">Ver livros disponíveis</button></div>
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>
<?php 
}
else {
    header("Location: index.php");
    exit();
}
?>