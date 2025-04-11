# A1
## Sistema de Autenticação Simples de Usuários

**Desenvolvedor:** Jefferson Alan Schmidt Ludwig
**Disciplina:** PROGRAMAÇÃO III
**Turma:** SMO11-8
**Instituição:** Unoesc

## Descrição do Projeto

Este projeto consiste em um sistema de autenticação simples de usuários, permitindo:

* Cadastro de novos usuários (nome, e-mail e senha).
* Login de usuários existentes com validação de e-mail e senha.
* Exibição de uma área restrita (dashboard) com uma saudação personalizada.
* Armazenamento do e-mail do usuário em um cookie (opcional).
* Logout com destruição da sessão do usuário.

## Estrutura do Projeto
```bash
A1/
├── Cadastro_Login/
│   ├── cadastro.php         # Formulário de cadastro de usuários
│   ├── login.php            # Formulário de login de usuários
│   ├── logout.php           # Script para realizar o logout do usuário
│   ├── processa_cadastro.php # Script para processar o formulário de cadastro
│   └── processa_login.php    # Script para processar o formulário de login e autenticação
├── Classes/
│   ├── Autenticador.php    # Classe responsável pela lógica de autenticação
│   ├── Sessao.php          # Classe para gerenciar as sessões dos usuários
│   └── Usuario.php         # Classe que representa um usuário e suas operações
├── dashboard.php          # Página da área restrita após o login
└── index.php              # Ponto de entrada principal da aplicação
```
## Instruções para Executar Localmente

Para executar este projeto localmente, você precisará de um ambiente de desenvolvimento web que suporte PHP. As instruções a seguir assumem que você tem o PHP instalado e um servidor web como Apache ou Nginx configurado.

**Passos:**

1.  **Clone o repositório (se aplicável):**
    Se este projeto estiver em um repositório Git (como GitHub, GitLab, etc.), clone-o para o seu computador:

    ```bash
    git clone <URL_DO_REPOSITORIO> A1
    cd A1
    ```

2.  **Configure seu servidor web:**
    Certifique-se de que a pasta `A1` (ou o diretório raiz onde você colocou os arquivos do projeto) esteja configurada como a raiz do seu servidor web local ou dentro do diretório de documentos do seu servidor (por exemplo, `htdocs` para Apache ou `www` para Nginx).

3.  **Acesse a aplicação através do seu navegador:**
    Abra seu navegador web e navegue até o endereço local do seu servidor. Se você configurou a pasta `A1` como a raiz, geralmente será algo como `http://localhost/` ou `http://127.0.0.1/`. Se estiver dentro de um subdiretório, o endereço será algo como `http://localhost/A1/`.

4.  **Navegue pelas páginas:**
    * Ao acessar o endereço base (`http://localhost/` ou `http://localhost/A1/`), o arquivo `index.php` será executado. Ele provavelmente o direcionará para a página de login (`login.php`) ou oferecerá um link para o cadastro (`cadastro.php`).
    * Preencha o formulário de cadastro em `cadastro.php` e siga as instruções. O processamento será feito por `processa_cadastro.php`.
    * Após o cadastro (ou se já tiver uma conta), acesse a página de login (`login.php`) e insira suas credenciais. O processamento será feito por `processa_login.php`.
    * Se a autenticação for bem-sucedida, você será redirecionado para a área restrita (`dashboard.php`).
    * Para sair, acesse a página de logout (`logout.php`).

**Observações:**

* Este projeto provavelmente precisará de um banco de dados para armazenar as informações dos usuários (nome, e-mail, senha). Certifique-se de configurar a conexão com o banco de dados no arquivo de configuração (se existir) e de criar as tabelas necessárias. As informações de conexão com o banco de dados podem estar dentro da classe `Usuario.php` ou em um arquivo de configuração separado.
* As senhas geralmente são armazenadas de forma segura (hash). Verifique o código em `processa_cadastro.php` e na classe `Usuario.php` para entender como as senhas estão sendo tratadas.
* Para testar a funcionalidade de cookies (armazenamento do e-mail), marque a opção correspondente no formulário de login (se implementada).
* Certifique-se de que as extensões PHP necessárias (como PDO para interação com banco de dados, se utilizado) estejam habilitadas na sua configuração do PHP.

Ao seguir estes passos, você deverá conseguir executar o sistema de autenticação localmente e testar suas funcionalidades.