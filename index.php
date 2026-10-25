<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">


</head>
<body class="body">

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
    </dialog>
  </div>
</nav>











<div class="fundo"></div>   
<div class="logo"></div>

   
    <form action="login.php" method="post">
        <div class="position-absolute top-50 start-50 translate-middle">  
            
        <h1 class="text-center">Login</h1>
        <?php if(isset($_GET['error'])) { ?> 
            <p class="error"><?php echo $_GET['error']; ?> </p>
           <?php } ?>
           
         <label class="usuarioPedido"> Nome de Usuário </label> <p class="text-end"> <input type="text" name="usuario" placeholder="Nome" class="form-control" 
         aria-label="Nome" aria-describedby="basic-addon1"><br></p>
           <p>                                                     </p>
        
        <label class="senhaPedido"> Senha <p class="text-end">
            <input type="password" name="senha"  placeholder="Senha" class="form-control" 
         aria-label=" Senha" aria-describedby="basic-addon1"><br></p></label>    
            <p class="text-center"><button class= "botao btn-outline theme-primary" type= "submit">Entrar</button></p>
        </div>
        
    </form>
    
    
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>