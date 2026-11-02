<?php
use PHPUnit\Framework\TestCase;

class AutoloadTest extends TestCase
{
    public function testCoreELayersCarregam(): void
    {
        foreach ([
            \Router::class, \Controller::class,
            \AuthController::class, \HomeController::class,
            \LivroController::class, \SugestaoController::class,
            \Livro::class, \Usuario::class, \Sugestao::class,
        ] as $classe) {
            $this->assertTrue(class_exists($classe), "Classe {$classe} não carregou");
        }
    } 

    public function testLivroTemMetodosEsperados(): void
    {
        $this->assertTrue(method_exists(\Livro::class, 'todos'));
        $this->assertTrue(method_exists(\Livro::class, 'buscar'));
    }

    public function testUsuarioAutenticarAssinatura(): void
    {
        $ref = new ReflectionMethod(\Usuario::class, 'autenticar');
        $this->assertSame(2, $ref->getNumberOfParameters());
    }
}