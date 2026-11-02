 
<?php
$nomeUsuario = $nomeUsuario ?? ($_SESSION['nome_usuario'] ?? '');
$logado      = isset($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library of Ruina</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/global.css">
    <?php if (!empty($pageCss)): ?>
        <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/<?= htmlspecialchars($pageCss) ?>">
    <?php endif; ?>
</head>
<body class="<?= htmlspecialchars($bodyClass ?? '') ?>">

<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <img src="https://img.icons8.com/ios-filled/50/open-book.png" alt="logo">
        <a class="navbar-brand text-white fw-bold ms-2"
           href="<?= BASE_URL ?>/<?= $logado ? 'home' : 'login' ?>">
            Library of Ruina
        </a>

        <?php if ($logado): ?>
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMain"
                aria-controls="navMain" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= BASE_URL ?>/livros">Acervo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= BASE_URL ?>/sugestoes">Sugerir Livro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= BASE_URL ?>/logout">Sair</a>
                </li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</nav>

<main class="container py-4"> 