# DesenvolvimentoDeFrameworks-ProjetoCodeIgniter

## Passos para a execução do projeto:
- Execute o arquivo docker-compose.yml do projeto com o comando "docker compose up".
- Certifique-se que as configurações das portas são compatíveis com seus serviços. Padrão do Projeto:
    - XAMP Apache 8090:80
    - MySQL 3309:3309
    - PHPMyAdmin 8091:80
- Após a inicialização do Container, acesse o Gerenciador do Banco de Dados PHPMyAdmin pela sua porta e utilizando o acesso e senha "root".
- Acesse a pasta do projeto em seu terminal e execute os seguintes comandos:
    - "php spark serve" - Para iniciar o sistema do projeto;
    - "php spark migrate" - Para realizar a migração de tabelas para o banco do projeto;
    - "php spark db:seed BDSeeder" - Para realizar a alimentação de dados do projeto;
- Após isso, basta acessar o servidor através da porta do serviço Apache.