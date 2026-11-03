Trabalho: Biblioteca 

Integrantes
Caio Eduardo Januario — PHP, HTML, Database

Victor Israel Michaili Rosa da Costa — CSS, Implementação do composer, MVC, Orientação de Objetos

Como rodar

Pré-requisitos
IDE para visualizar o código

XAMPP -> https://www.apachefriends.org/pt_br/index.html

Composer -> https://getcomposer.org/

Passo a passo

- Baixe o arquivo ZIP do repósitorio

- Extraia o conteúdo do ZIP numa pasta

- Abra o XAMPP e inicie Apache e MySQL

- Acesse `http://localhost/phpmyadmin`

- Importe o arquivo `teste_db.sql`

- Acesse `http://localhost:8000` 

Faça login com `admin` / `321`


Em caso de erro

Certifique de o autoload.php está instalado, caso contrário verifique com o grupo o erro
Após isso coloque o comando `composer serve`

Caso o código não esteja funcionando por conta do composer coloque os seguintes comandos:
`composer dump-autoload`
`php -r "require 'vendor/autoload.php'; var_dump(class_exists('Dotenv\Dotenv'));"`


