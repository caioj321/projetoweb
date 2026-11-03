 
<div class="d-flex justify-content-center" style="min-height: 70vh;">
    <div class="w-100" style="max-width: 500px;">

        <h1 class="text-center mb-4">Envie uma sugestão de livro</h1>

        <?php if (!empty($erro)): ?>
            <div class="alert alert-danger text-center"><?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>

        <form method="post" action="<?= BASE_URL ?>/sugestoes">

            <label class="form-label">Título do Livro</label>
            <input type="text" name="titulo" class="form-control mb-3" required>

            <label class="form-label">Autor</label>
            <input type="text" name="autor" class="form-control mb-3" required>

            <label class="form-label">Número de Páginas</label>
            <input type="number" name="nPaginas" class="form-control mb-3" min="1" required>


            <button type="submit" class="btn btn-primary w-100">Enviar Sugestão</button>

        </form>
    </div>
</div> 