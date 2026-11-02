 
<?php
class SugestaoController extends Controller
{
    public function create(): void
    {
        $this->requerLogin();
        $this->render('sugestoes/create', [
            'erro'    => $_GET['error'] ?? null,
            'pageCss' => 'sugestoes.css',
        ]);
    }

    public function store(): void
    {
        $this->requerLogin();

        $titulo   = trim($_POST['titulo']   ?? '');
        $autor    = trim($_POST['autor']    ?? '');
        $paginas  = (int)($_POST['nPaginas'] ?? 0);
        $genero   = trim($_POST['genero']   ?? '');

        if ($titulo === '' || $autor === '' || $paginas <= 0 || $genero === '') {
            $this->redirect('/sugestoes?error=' . urlencode('Preencha todos os campos corretamente'));
        }

        Sugestao::criar([
            'titulo'   => $titulo,
            'autor'    => $autor,
            'nPaginas' => $paginas,
            'genero'   => $genero,
        ]);

        $this->redirect('/livros');
    }
} 