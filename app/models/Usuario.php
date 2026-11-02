 
<?php
class Usuario
{
    public static function autenticar(string $nome, string $senha): ?array
    {
        $stmt = db()->prepare(
            'SELECT id, nome_usuario, senha FROM usuarios
             WHERE nome_usuario = :nome AND senha = :senha LIMIT 1'
        );
        $stmt->execute([':nome' => $nome, ':senha' => $senha]);
        $row = $stmt->fetch();
        return $row ?: null;
    }
}   