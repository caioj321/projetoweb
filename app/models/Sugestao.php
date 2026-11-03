<?php
class Sugestao
{
    public static function criar(array $d): bool
    {
        $stmt = db()->prepare(
            'INSERT INTO livros (titulo, autor, nPaginas)
             VALUES (:titulo, :autor, :nPaginas)'
        );
        return $stmt->execute([
            ':titulo'   => $d['titulo'],
            ':autor'    => $d['autor'],
            ':nPaginas' => $d['nPaginas'],
        ]);
    }

    public static function todasComLivro(): array
    {
        $sql = '
            SELECT
                s.*,
                l.codigo   AS livro_codigo,
                l.titulo   AS livro_titulo,
                l.autor    AS livro_autor
            FROM livros s
            LEFT JOIN livros l
                ON l.titulo = s.titulo
               AND l.autor  = s.autor
            ORDER BY s.criado_em DESC
        ';

        return db()->query($sql)->fetchAll();
    }

    
    public static function todas(): array
    {
        return db()->query('SELECT * FROM livros ORDER BY criado_em DESC')->fetchAll();
    }
}