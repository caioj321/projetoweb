 
<?php
class LivroController extends Controller
{
    public function index(): void
    {
        $this->requerLogin();

        $busca  = trim($_GET['q'] ?? '');
        $livros = $busca !== '' ? Livro::buscar($busca) : Livro::todos();

        $this->render('livros/index', [
            'livros'  => $livros,
            'busca'   => $busca,
            'pageCss' => 'livros.css',
        ]);
    }
} 