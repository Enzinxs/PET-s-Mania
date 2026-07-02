<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contato Pet's Mania</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <link rel="stylesheet" href="./css/itens.css">
</head>
<body class="has-background-light">
    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <figure class="image is-128x128">
  <img src="./img/pets mania logo.png" class="is-rounded"/>
</figure>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="itens">
      <a class="navbar-item">
        <p class="is-size-4"><a href="index.php" class="link-limpo has-text-dark"><strong>HOME</strong></a></p>
      </a>

      <a class="navbar-item">
         <p class="is-size-4"><a href="racoes.php" class="link-limpo has-text-dark"><strong>RAÇÕES</strong></a></p>
      </a>

      <a class="navbar-item">
         <p class="is-size-4"><a href="contato.php" class="link-limpo has-text-dark"><strong>CONTATO</strong></a></p>
      </a>
      </div>
      <div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link">
       <p class="is-size-4"><strong>PETs</strong></p>
    </a>

    <div class="navbar-dropdown">
      <a class="navbar-item">
       <a href="caes.php" class="link-limpo has-text-dark"><b>CÃES</b></a>
      </a>
      <a class="navbar-item">
        <a href="gatos.php" class="link-limpo has-text-dark"><b>GATOS</b></a>
      </a>
      <a class="navbar-item">
        <a href="aves.php" class="link-limpo has-text-dark"><b>AVES</b></a>
    <div class="navbar-end">
      <div class="navbar-item">
      </div>
      </div>
    </div>
</nav>

 <section class="section">
        <div class="container">
            <h1 class="title has-text-centered">Entre em Contato</h1>
            
            <div class="columns is-centered">
                <div class="column is-half">
                    <form action="#" method="POST">
                        
                        
                        <div class="field">
                            <label class="label">Nome</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Seu nome completo">
                            </div>
                        </div>

                        
                        <div class="field">
                            <label class="label">E-mail</label>
                            <div class="control">
                                <input class="input" type="email" placeholder="seu-email@exemplo.com">
                            </div>
                        </div>

                        
                        <div class="field">
                            <label class="label">Mensagem</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="Como podemos ajudar?"></textarea>
                            </div>
                        </div>

                        
                        <div class="field">
                            <div class="control">
                                <button class="button is-link is-fullwidth">Enviar Mensagem</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
<script src="script.js"></script>
<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>CNPJ:</strong>15.111.111/0001-15 rua Limão Azedo Nº15. Bairro: Vila Esperança Turmalima - Minas Gerais - Brasil<br>Copyright© 2026 Pet's Mania - Todos os direitos reservados.
    </p>
  </div>
</footer>
</body>
</html>
