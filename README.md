# Sistema de Autenticação Simples

## Autor
**Nome Completo:** Luan Felipe Tenroller  

**UNOESC São Miguel do Oeste** 

**Ciência da Computação**

---

## Descrição do Projeto
Este é um sistema de autenticação simples desenvolvido em PHP, que permite:
- Cadastro de usuários com nome, e-mail e senha.
- Login com validação de e-mail e senha.
- Exibição de uma área restrita (dashboard) com saudação personalizada.
- Armazenamento do e-mail em cookies, caso o usuário opte por lembrar o e-mail.
- Logout com destruição da sessão.

O sistema utiliza cookies para armazenar os usuários cadastrados (simulando um banco de dados) e sessões para gerenciar o login do usuário.

---

## Instruções para Executar Localmente

### Pré-requisitos
1. **Servidor Web**: Certifique-se de ter o XAMPP, WAMP ou outro servidor web com suporte a PHP instalado.

### Passos para Configuração
1. **Clonar o Repositório**:
   - Faça o download ou clone este repositório para o diretório `htdocs` do seu servidor local.
   - Exemplo de caminho no XAMPP:
     ```
     C:\xampp\htdocs\prog3-a1-poo-LuanFelipeTenroller
     ```

2. **Iniciar o Servidor**:
   - Abra o painel de controle do XAMPP e inicie o servidor **Apache**.

3. **Acessar o Projeto**:
   - No navegador, acesse:
     ```
     http://localhost/prog3-a1-poo-LuanFelipeTenroller
     ```

4. **Fluxo do Sistema**:
   - **Tela de Login**: O sistema inicia na tela de login.
   - **Cadastro**: Caso não tenha uma conta, clique em "Cadastre-se" para criar um novo usuário.
   - **Login**: Após o cadastro, volte para a tela de login e insira suas credenciais.
   - **Dashboard**: Após o login, você será redirecionado para o dashboard, onde verá uma saudação personalizada e o e-mail lembrado (se marcado).
   - **Logout**: Clique em "Sair" para encerrar a sessão e retornar à tela de login.

---

## Observações
- Este projeto é uma simulação de um sistema de autenticação com fins didáticos e não deve ser usado em produção sem melhorias de segurança.
- Os usuários são armazenados em cookies para simular um banco de dados.

---
