 
<?php
class Router
{
    public function dispatch(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (BASE_URL !== '' && strpos($uri, BASE_URL) === 0) {
            $uri = substr($uri, strlen(BASE_URL));
        }
        $uri = rtrim($uri, '/') ?: '/';
                $metodo = $_SERVER['REQUEST_METHOD'];

        $rotas = [
            ['GET',  '/',            [AuthController::class,     'loginForm']],
            ['GET',  '/login',       [AuthController::class,     'loginForm']],
            ['POST', '/login',       [AuthController::class,     'login']],
            ['GET',  '/logout',      [AuthController::class,     'logout']],
            ['GET',  '/home',        [HomeController::class,     'index']],
            ['GET',  '/livros',      [LivroController::class,    'index']],
            ['GET',  '/sugestoes',   [SugestaoController::class, 'create']],
            ['POST', '/sugestoes',   [SugestaoController::class, 'store']],
        ];

        foreach ($rotas as [$m, $caminho, $acao]) {
            if ($m === $metodo && $caminho === $uri) {
                [$classe, $metodoAcao] = $acao;
                (new $classe())->$metodoAcao();
                    return;
            }
        }

        http_response_code(404);
        echo '<h1>404 — Página não encontrada</h1>';
    }
}   