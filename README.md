                                       # A1

**Estudante:** Jefferson Alan Schmidt Ludwig

**Disciplina:** PROGRAMAÇÃO III

**Turma:** SMO11-8

**Instituição:** Unoesc

## Descrição do Projeto

Este projeto consiste em um sistema de autenticação simples de usuários com:

* Cadastro de usuários (nome, e-mail e senha).
* Login com validação de e-mail e senha.
* Exibição de uma área restrita com saudação personalizada
* Armazenamento do e-mail em cookie, se o usuário optar
* Logout com destruição da sessão.

## Estrutura do Projeto
```bash
A1/
├── Cadastro_Login/
│   ├── cadastro.php         
│   ├── login.php            
│   ├── logout.php           
│   ├── processa_cadastro.php 
│   └── processa_login.php    
├── Classes/
│   ├── Autenticador.php    
│   ├── Sessao.php          
│   └── Usuario.php         
├── dashboard.php          
└── index.php              
```
## Instruções para Executar Localmente

* Ambiente de desenvolvimento web
* PHP instalado e um servidor web como Apache configurado.

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


                    # • Enviar o link para o email leandro.vieira@unoesc.edu.br 11h59 de 15/04/2025.