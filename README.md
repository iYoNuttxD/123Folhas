# 123Folhas

**123Folhas** é uma plataforma que oferece um sistema de recompensas para viajantes, além de um blog especializado em destinos internacionais e nacionais. O site permite que usuários busquem destinos, cadastrem-se para acessar funcionalidades exclusivas e gerenciem seu perfil, tudo com uma interface amigável.

## Visão Geral

Este projeto tem como objetivo fornecer uma experiência interativa e recompensadora para usuários interessados em viagens. O sistema inclui:

- **Blog de Viagens** com artigos sobre diversos destinos.
- **Busca de Destinos** que facilita a navegação pelos conteúdos de interesse.
- **Sistema de Recompensas** integrado à interação do usuário com a plataforma.
- **Perfis de Usuário** personalizados, incluindo histórico de viagens.

##Premiação
O projeto 123Folhas foi premiado com 1º lugar na categoria de voto popular em um concurso de desenvolvimento web, realizado na Pontifícia Universidade Católica do Paraná (PUC-PR), reconhecendo sua inovação e qualidade técnica.

![image](https://github.com/user-attachments/assets/97ad9cdc-8e77-448e-8e6e-fe0c6bdfca45)

## Funcionalidades Principais

### 1. Sistema de Cadastro e Login
Os usuários podem criar uma conta e se autenticar através do módulo de **Cadastro** e **Login**. Após a autenticação, os usuários têm acesso ao perfil personalizado, onde podem visualizar suas recompensas e histórico de viagens.

![image](https://github.com/user-attachments/assets/a1bcd5ee-04a7-4758-a239-4f2c823c1b34)

### 2. Sistema de Recompensas
O **123Recompensa** permite que os usuários acumulem pontos por utilização de cupons. Os pontos podem ser trocados por brindes, como camiseta, óculos, caneca, entre outros.

![image](https://github.com/user-attachments/assets/8398921e-0dd0-415f-9789-2a8c32f697c6)

### 3. Blog de Viagens
A seção **Blog** oferece conteúdo exclusivo sobre destinos de viagem, com categorias divididas entre **Nacionais** e **Internacionais**, permitindo que os usuários explorem lugares por todo o mundo, além de dicas e guias de viagem.

![image](https://github.com/user-attachments/assets/c06901ea-19a0-40c7-a822-3a8e942c0af4)

### 4. Busca de Destinos
Na funcionalidade de **Busca**, o usuário pode encontrar rapidamente destinos de interesse, seja por categoria ou palavras-chave. Isso facilita a navegação dentro do portal.

![image](https://github.com/user-attachments/assets/658730bb-2c05-4611-b8c5-172a492be1a0)

### 5. Perfis Personalizados
Cada usuário registrado tem um perfil único onde pode gerenciar:
- **Dados pessoais** (nome, e-mail, etc.).
- **Histórico de viagens** realizadas ou planejadas.
- **Conquistas** e recompensas obtidas através da plataforma.

![image](https://github.com/user-attachments/assets/b40637cf-0d71-40e6-8ec8-6ff5904cc3b6)

## Requisitos de Instalação

Para executar o projeto localmente, siga as instruções abaixo:

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/iYoNuttxD/123Folhas
   ```

2. **Configuração do Servidor Local:**
   - Instale o [XAMPP](https://www.apachefriends.org/index.html) ou outro servidor local que suporte PHP e MySQL.
   - Coloque o projeto na pasta de acesso do servidor (`htdocs` no caso do XAMPP).

3. **Configuração do Banco de Dados:**
   - Crie um banco de dados MySQL.
   - No arquivo `connection.php`, configure as credenciais do banco:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "123folhas";
     ```

4. **Inicie o Servidor:**
   Acesse o projeto via navegador por meio de `http://localhost/123folhas/`.

## Tecnologias Utilizadas

- **PHP**: Usado para o backend e comunicação com o banco de dados.
- **MySQL**: Banco de dados relacional para armazenar informações de usuários, recompensas e conteúdo do blog.
- **HTML5/CSS3**: Usados para a construção das páginas e estilização.
- **JavaScript**: Funcionalidades interativas como validação de formulários.
