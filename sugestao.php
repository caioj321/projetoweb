<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['nome_usuario'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerir um livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <link rel="stylesheet" href="sugestao.css">

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
    </dialog>
  </div>
</nav>







    
    <div class="position-absolute top-0 start-50 translate-middle-x">
        <div class="mt-12">
    <h1>Envie uma sugestão de livro para o acervo</h1>
    </div>
        </div>
    <div class="position-fixed top-50 start-50 translate-middle">
        
    <form action="post">
    <p class="text-center"><label>Titulo do Livro</p>
    <p class="text-center"><input type="text" name="titulo" placeholder="Titulo" class="form-control" 
         aria-label="Titulo" aria-describedby="basic-addon1"/></p>

    <label>Autor
    <p class="text-end"><input type="text" name="autor" placeholder="Nome do Autor" class="form-control" 
         aria-label="Nome do Autor" aria-describedby="basic-addon1"/></p>
    </label>
    
    <label>Número de Páginas
    <p class="text-end"><input type="text name="nPaginas" placeholder="Número de Páginas" class="form-control" 
         aria-label="Número de Páginas" aria-describedby="basic-addon1"/></p>
    </label>
    
    <label>Gênero
    <p class="text-end"><input type="text" name="genero" placeholder="Gênero do Livro" class="form-control" 
         aria-label="Gênero do Livro" aria-describedby="basic-addon1"/></p>
    </label>
    </label>
    <p>                                           </p>
    <p class="text-end"><button type="submit" onclick= "location :'adicionar.php'" class="btnEnviarSugestao btn-outline theme-primary">Enviar Sugestão</button></p>
    </form>
    </div>
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