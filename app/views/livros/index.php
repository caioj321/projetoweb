  
<div class="mb-4">
    <h1>Acervo de livros</h1>
    <p>Consulte, adicione ou devolva livros</p>

    <form method="get" action="<?= BASE_URL ?>/livros" class="d-flex" style="max-width: 400px;">
        <input type="text" name="q" class="form-control me-2"
               placeholder="Pesquisar por título ou autor"
               value="<?= htmlspecialchars($busca) ?>">
        <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
</div>

<table class="table table-striped-columns">
    <thead>
        <tr>
            <th>Capa</th>
            <th>Código</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Nº Páginas</th>
        </tr>
    </thead>
    <tbody>
    <?php if (empty($livros)): ?>
        <tr><td colspan="5" class="text-center">Nenhum livro encontrado.</td></tr>
    <?php else: foreach ($livros as $l): ?>
        <tr>
            <td>
                <img src="https://blocks.astratic.com/img/general-img-landscape.png"
                     class="img-thumbnail" width="100" height="100" alt="">
            </td>
            <td><?= htmlspecialchars($l['codigo'])    ?></td>
            <td><?= htmlspecialchars($l['titulo'])    ?></td>
            <td><?= htmlspecialchars($l['autor'])     ?></td>
            <td><?= htmlspecialchars($l['nPaginas'])  ?></td>
        </tr>
    <?php endforeach; endif; ?>
    </tbody>
</table> 