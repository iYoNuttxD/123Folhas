# 123Folhas

**123Folhas** é uma plataforma que oferece um sistema de recompensas para viajantes, além de um blog especializado em destinos internacionais e nacionais. O site permite que usuários busquem destinos, cadastrem-se para acessar funcionalidades exclusivas e gerenciem seu perfil, tudo com uma interface amigável.

## Visão Geral

Este projeto tem como objetivo fornecer uma experiência interativa e recompensadora para usuários interessados em viagens. O sistema inclui:

- **Blog de Viagens** com artigos sobre diversos destinos.
- **Busca de Destinos** que facilita a navegação pelos conteúdos de interesse.
- **Sistema de Recompensas** integrado à interação do usuário com a plataforma.
- **Perfis de Usuário** personalizados, incluindo histórico de viagens e conquistas.

## Funcionalidades Principais

### 1. Sistema de Cadastro e Login
Os usuários podem criar uma conta e se autenticar através do módulo de **Cadastro** e **Login**. Após a autenticação, os usuários têm acesso ao perfil personalizado, onde podem visualizar suas recompensas e histórico de viagens.

### 2. Sistema de Recompensas
O **123Recompensa** permite que os usuários acumulem pontos por suas interações no site, como leitura de artigos, cadastro de viagens e compartilhamento de experiências. Os pontos podem ser trocados por benefícios, como descontos em destinos e parcerias com empresas de turismo.

### 3. Blog de Viagens
A seção **Blog** oferece conteúdo exclusivo sobre destinos de viagem, com categorias divididas entre **Nacionais** e **Internacionais**, permitindo que os usuários explorem lugares por todo o mundo, além de dicas e guias de viagem.

### 4. Busca de Destinos
Na funcionalidade de **Busca**, o usuário pode encontrar rapidamente destinos de interesse, seja por categoria ou palavras-chave. Isso facilita a navegação dentro do portal.

### 5. Perfis Personalizados
Cada usuário registrado tem um perfil único onde pode gerenciar:
- **Dados pessoais** (nome, e-mail, etc.).
- **Histórico de viagens** realizadas ou planejadas.
- **Conquistas** e recompensas obtidas através da plataforma.

## Requisitos de Instalação

Para executar o projeto localmente, siga as instruções abaixo:

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/usuario/123folhas.git
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
   Acesse o projeto via navegador por meio de `http://localhost/123folhas/index.php`.

## Tecnologias Utilizadas

- **PHP**: Usado para o backend e comunicação com o banco de dados.
- **MySQL**: Banco de dados relacional para armazenar informações de usuários, recompensas e conteúdo do blog.
- **HTML5/CSS3**: Usados para a construção das páginas e estilização.
- **JavaScript**: Funcionalidades interativas como validação de formulários.
