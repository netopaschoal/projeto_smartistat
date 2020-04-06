## Instrucoes de Instalação

<p>•	 git clone https://github.com/netopaschoal/projeto_smartistat.git </p>
<p>•	cd projectname    // entre na pasta do projeto </p>
<p>•	composer install        // instala as dependencias do projeto</p>
<p>•	crie um banco de dados MySQL</p>
<p>•	criar o arquivo .env    // copie o arquivo .env.exemple e crie um arquivo .env na mesma pasta que ele e coloque o nome do banco                                 que vc criou na variavel DB_DATABASE= </p>
<p>•	php artisan key:generate  // gera as chaves necessarias no arquivo .env </p>
<p>•	php artisan migrate         // Cria os modelos e as tabelas no banco de dados </p>
<p>•	php artisan storage:link    // É necessario para o servidor acessar as imagens, que devem ser colocadas na pasta Public -> storage </p>
<p>•	php artisan serve  // starta o servidor na porta 8000, abra o navegar e digite: http://localhost:8000 </p>
    
   <h3> A aplicação ja esta rodando, é necessario criar 2 usuarios para depois poder rodar o Seeder, que vai inserir dados nas tabelas para podermos testar o sistema </h3>
<p>•	criar 2 usuarios // acesse register e crie os 2 usuarios, se criar só 1 e tentar fazer o comando de baixo vai dar erro </p>
<p>•	Aperte Ctrl + C no terminal para fechar o servidor e poder executar o comando de baixo </p>
<p>•	php artisan db:seed // Vai inserir os dados no banco para podemos testar o sistema </p>

<h3>Agora pode executar php artisan serve novamente que os usuarios estão com os dados configurados </h3>
