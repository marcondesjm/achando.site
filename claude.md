# Resumo do Projeto Achando.Site (Atualizado)

## Estado Atual (Última atualização: 2026-11-02)
Todas as alterações foram commitadas e enviadas com sucesso para o repositório GitHub (`origin main`). O deploy automático na Hostinger deve refletir essas mudanças em alguns minutos.

## Correções Realizadas Hoje
1. **Links de Login/Cadastro**: 
 - Botão "Entrar" no site principal redireciona para `https://app.achando.site/`.
 - Botão "Teste grátis com 5 empresas" redireciona para `https://app.achando.site/cadastrar.htm`.
 - Todas as referências antigas com parâmetros (`?next=%2Fhoje`) foram removidas dos arquivos `index.html` e `assets/pagina-v2.js`.

2. **Configuração do Subdomínio App (pasta `app/`)**:
 - Arquivos presentes: `entrar.htm`, `prospeccao.htm`, `cadastrar.htm`, `index.html`, `.htaccess`.
 - **`.htaccess` da pasta `app/`**: Redireciona internamente `/entrar` e `/entrar.htm` para a raiz `/` do subdomínio.
 - **`.htaccess` da raiz**: Mantém as regras de redirecionamento para o subdomínio e URLs limpas do site principal (`/termos`, `/privacidade`).

## Guia: Banco de Dados na Hostinger
- **Criação**: No hPanel, vá em Bancos de Dados > Gerenciamento > Criar novo.
- **Conexão (PHP)**: Use PDO ou MySQLi. Nunca exponha credenciais em arquivos `.js` ou `.html`.
- **Exemplo de Conexão (`conexao.php`)**:
 ```php
 $host = 'localhost';
 $db = 'uXXX_banco';
 $user = 'uXXX_usuario';
 $pass = 'senha';
 $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
 ```

## Próximos Passos (Para continuar amanhã)
1. **Backend de Cadastro**: Criar o script PHP para receber os dados do formulário `cadastrar.htm` e salvar no MySQL.
2. **Testes**: Verificar em janela anônima se os links estão corretos após o deploy.