 
<?php
class HomeController extends Controller
{
    public function index(): void
    {
        $this->requerLogin();
        $this->render('home/index', [
            'nomeUsuario' => $_SESSION['nome_usuario'],
            'pageCss'     => null,
        ]);
    }
} 