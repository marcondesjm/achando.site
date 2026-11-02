# Resumo do Projeto Achando.Site

## Estado Atual (Última atualização: 2026-11-02)
Todas as alterações foram commitadas e enviadas com sucesso para o repositório GitHub (`origin main`). O deploy automático na Hostinger deve refletir essas mudanças em alguns minutos.

## Estrutura e Configurações Principais

### 1. Site Principal (`index.html`, `assets/pagina-v2.js`)
- **Botão "Entrar"**: Redireciona para `https://app.achando.site/`
- **Botão "Teste grátis com 5 empresas"**: Redireciona para `https://app.achando.site/cadastrar.htm`

### 2. Subdomínio do App (pasta `app/`)
- **Arquivos presentes**: `entrar.htm`, `prospeccao.htm`, `cadastrar.htm`, `index.html`, `.htaccess`
- **`.htaccess` da pasta `app/`**: Redireciona internamente `/entrar` e `/entrar.htm` para a raiz `/` do subdomínio, mantendo a URL limpa no navegador.
- **`.htaccess` da raiz do projeto**: 
  - Redireciona requisições de `app.achando.site` e `app.achando.site.com.br` para a pasta `/app/`.
  - Mantém URLs limpas para o site principal: `/termos` -> `termos.html` e `/privacidade` -> `privacidade.html`.

### 3. Próximos Passos (Para continuar amanhã)
1. Verificar no painel da Hostinger (hPanel) se o subdomínio `app.achando.site` está apontando corretamente para a pasta onde os arquivos do `app/` estão localizados (ou se o deploy automático do GitHub já sincronizou tudo).
2. Testar os fluxos em uma janela anônima do navegador:
   - Site principal -> Botão "Entrar" -> Deve ir para `https://app.achando.site/`
   - Site principal -> Botão "Teste grátis" -> Deve ir para `https://app.achando.site/cadastrar.htm`
   - App -> Tentar acessar `https://app.achando.site/entrar` -> Deve redirecionar automaticamente para `https://app.achando.site/`

## Observações Importantes
- O arquivo `app_upload.zip` foi gerado na raiz do projeto caso seja necessário fazer o upload manual dos arquivos do app via Gerenciador de Arquivos da Hostinger.
- O arquivo de logo `assets/achandosite.webp` foi atualizado para ser visualmente idêntico ao `assets/achandosite.svg` (fundo escuro e texto branco/roxo).