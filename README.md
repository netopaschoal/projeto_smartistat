## Instrucoes de Instalação

•	 git clone https://github.com/netopaschoal/projeto_smartistat.git
•	cd projectname    // entre na pasta do projeto
•	composer install        // instala as dependencias do projeto
•	crie um banco de dados MySQL
•	criar o arquivo .env    // copie o arquivo .env.exemple e crie um arquivo .env na mesma pasta que ele e coloque o nome do banco                                 que vc criou na variavel DB_DATABASE=
•	php artisan key:generate  // gera as chaves necessarias no arquivo .env
•	php artisan migrate         // Cria os modelos e as tabelas no banco de dados
•	php artisan storage:link    // É necessario para o servidor acessar as imagens, que devem ser colocadas na pasta Public -> storage
•	php artisan serve  // starta o servidor na porta 8000, abra o navegar e digite: http://localhost:8000
    
    A aplicação ja esta rodando, é necessario criar 2 usuarios para depois poder rodar o Seeder, que vai inserir dados nas tabelas para podermos testar o sistema
•	criar 2 usuarios // acesse register e crie os 2 usuarios, se criar só 1 e tentar fazer o comando de baixo vai dar erro
•	Aperte Ctrl + C no terminal para fechar o servidor e poder executar o comando de baixo
•	php artisan db:seed // Vai inserir os dados no banco para podemos testar o sistema

Agora pode executar php artisan serve novamente que os usuarios estão com os dados configurados
