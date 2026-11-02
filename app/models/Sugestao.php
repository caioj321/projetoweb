 
<?php
class Sugestao
{
    public static function criar(array $d): bool
    {
        $stmt = db()->prepare(
            'INSERT INTO sugestoes (titulo, autor, nPaginas, genero)
             VALUES (:titulo, :autor, :nPaginas, :genero)'
        );
        return $stmt->execute([
            ':titulo'   => $d['titulo'],
            ':autor'    => $d['autor'],
            ':nPaginas' => $d['nPaginas'],
            ':genero'   => $d['genero'],
        ]);
    }

    public static function todas(): array
    {
        return db()->query('SELECT * FROM sugestoes ORDER BY criado_em DESC')->fetchAll();
    }
}  