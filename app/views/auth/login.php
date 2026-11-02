 
<div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <form action="<?= BASE_URL ?>/login" method="post" class="w-100" style="max-width: 400px;">

        <h1 class="text-center text-white mb-4">Login</h1>

        <?php if (!empty($erro)): ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= htmlspecialchars($erro) ?>
            </div>
        <?php endif; ?>

        <label class="form-label text-white">Nome de Usuário</label>
        <input type="text" name="usuario" placeholder="Nome"
               class="form-control mb-3" required autofocus>

        <label class="form-label text-white">Senha</label>
        <input type="password" name="senha" placeholder="Senha"
               class="form-control mb-4" required>

        <button type="submit" class="btn botao w-100">Entrar</button>

    </form>
</div> 