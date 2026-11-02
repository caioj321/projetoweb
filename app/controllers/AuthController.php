 
<?php
class AuthController extends Controller
{
    public function loginForm(): void
    {
        if (isset($_SESSION['id'])) {
            $this->redirect('/home');
        }
        $this->render('auth/login', [
            'erro'      => $_GET['error'] ?? null,
            'pageCss'   => 'login.css',
            'bodyClass' => 'body',
        ]);
    }

    public function login(): void
    {
        $usuario = trim($_POST['usuario'] ?? '');
        $senha   = trim($_POST['senha']   ?? '');

        if ($usuario === '') {
            $this->redirect('/login?error=' . urlencode('Usuário não informado'));
        }
        if ($senha === '') {
            $this->redirect('/login?error=' . urlencode('Senha não informada'));
        }

        $row = Usuario::autenticar($usuario, $senha);

        if (!$row) {
            $this->redirect('/login?error=' . urlencode('Usuário/senha incorretos'));
        }

        $_SESSION['id']           = $row['id'];
        $_SESSION['nome_usuario'] = $row['nome_usuario'];
        $this->redirect('/home');
    }

    public function logout(): void
    {
        session_unset();
        session_destroy();
        $this->redirect('/login');
    }
} 