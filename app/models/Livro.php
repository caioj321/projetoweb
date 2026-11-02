 
<?php
class Livro
{
    public static function todos(): array
    {
        return db()->query('SELECT * FROM livros ORDER BY codigo')->fetchAll();
    }

    public static function buscar(string $termo): array
    {
        $stmt = db()->prepare(
            'SELECT * FROM livros
             WHERE titulo LIKE :t OR autor LIKE :t
             ORDER BY codigo'
        );
        $stmt->execute([':t' => '%' . $termo . '%']);
        return $stmt->fetchAll();
    }
}  