# formulário em php

Ao executar o comando abaixo:

```bash
cd DGT0280
php -S 0.0.0.0:5000
```

e visitar o endereço <http://0.0.0.0:5000>,

temos por resultado uma página vazia.

## o que o código deveria fazer

Ao visitar a página, verificar se está logado (`isset($_SESSION['login'])`)

Se estiver, mostrar o conteúdo da `logou.php`

Se não estiver, mostrar o conteúdo da `login.php` ; esse script é pra ter um
formulário que submete pro `index.php` um `POST` com três campos de formulário:

- email (provavelmente um `<input name="login" type="text"/>`)
- senha (provavelmente um `<input name="senha" type="password"/>`)
- enviar (provavelmente um `<input name="enviar" type="submit"/>`)

## Proposta de solução

No login.php criar um formulário mais ou menos assim:

```php
<form action="index.php" method="POST">
  <label>
    Login
    <input name="login" type="text"/>
  </label>
  <label>
    Senha
    <input name="senha" type="password"/>
  </label>
  <input name="enviar" type="submit"/>
</form>
```

## Possíveis problemas

No `index.php` é setado uma variável de sessão caso o o login e senha sejam os
valores esperados no lado do servidor. Aí, enquanto a sessão for válida, nunca
mais o formulário aparece.

Recomendo usar o modo anônimo do browser ou um outro brower ou estender o código
e criar um jeito de finalizar a sessão.
