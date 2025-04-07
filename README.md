# Blog Codar - Plataforma de Blog para Publicação de Artigos

O **Blog Codar** é uma aplicação de blog simples que permite aos usuários criar, editar e visualizar artigos. Esse projeto foi desenvolvido com **PHP** no backend e **MySQL** para gerenciamento dos dados, além de **HTML5** e **CSS3** para a interface.

## Funcionalidades
- **Publicação de Artigos:** Os usuários podem criar e publicar artigos com título, conteúdo e data de publicação.
- **Edição de Artigos:** Permite editar os artigos criados a qualquer momento.
- **Listagem de Artigos:** Exibe todos os artigos publicados de forma organizada.
- **Visualização Completa:** Exibe o conteúdo completo do artigo ao clicar no título.

## Tecnologias Utilizadas
- **PHP:** Para a lógica de backend e controle de artigos.
- **MySQL:** Para o armazenamento de artigos no banco de dados.
- **HTML5 e CSS3:** Para a estruturação e estilização da interface.
- **JavaScript:** Para validações e pequenas interações no frontend.

## Como Executar

### Pré-requisitos
Antes de começar, verifique se você tem o seguinte instalado:
- PHP (versão 7 ou superior)
- MySQL ou MariaDB
- Um servidor local (por exemplo, XAMPP, WAMP, ou MAMP)

### Passos

1. **Clone o Repositório**
   Clone este repositório para sua máquina local:
   ```bash
   git clone https://github.com/yurijarcem/Blog-Codar.git

2. **Configuração do Banco de Dados Crie um banco de dados MySQL e importe o arquivo blog_codar.sql para criar as tabelas necessárias**:

   ```sql
   CREATE DATABASE blog_codar;
   USE blog_codar;
   SOURCE blog_codar.sql;

3. **Configuração do Backend**

- Abra o arquivo config.php (localizado na raiz do projeto) e insira as credenciais do seu banco de dados:

   ```php
   $dbHost = 'localhost';  // Endereço do servidor MySQL
   $dbUsername = 'root';   // Usuário do MySQL
   $dbPassword = '';       // Senha do MySQL
   $dbName = 'blog_codar'; // Nome do banco de dados

4. **Iniciar o Servidor Navegue até o diretório do projeto e inicie o servidor PHP**:

   ```bash
   php -S localhost:8000

5. **Abra o navegador e acesse a aplicação em http://localhost:8000.**

## Estrutura do Projeto

- **O projeto possui a seguinte estrutura de diretórios**:

   ```bash
   /Blog-Codar
   │
   ├── /assets             # Arquivos estáticos (CSS, JS)
   │   ├── /css            # Arquivos de estilo
   │   └── /js             # Arquivos JavaScript
   │
   ├── /includes           # Arquivos PHP para inclusão
   │   ├── config.php      # Configurações de banco de dados
   │   ├── header.php      # Cabeçalho do site
   │   └── footer.php      # Rodapé do site
   │
   ├── /posts              # Scripts para manipulação de artigos
   │   ├── create.php      # Criar um novo artigo
   │   ├── edit.php        # Editar um artigo existente
   │   └── index.php       # Página principal para listagem de artigos
   │
   └── index.php           # Página inicial

## Contribuições

**Se você quiser contribuir para o desenvolvimento do Blog Codar, siga os passos abaixo**:

 - Faça um fork deste repositório.

 - Crie uma nova branch para suas alterações (git checkout -b nova-feature).

 - Realize as modificações e commit (git commit -am 'Adicionando nova feature').

 - Envie para o seu repositório remoto (git push origin nova-feature).

 - Abra uma pull request explicando suas alterações.
