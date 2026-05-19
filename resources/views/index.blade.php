
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NovaShop | Ecommerce</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <script defer src="/assets/js/script.js"></script>
</head>
<body>  
  <header class="topbar">
    <div class="container nav">
      <a class="brand" href="/"><span class="brand-badge">N</span><span>NovaShop</span></a>
      <nav class="nav-links">
        <a href="catalogo">Catalogo</a>
        <a href="produto">Produto</a>
        <a href="carrinho">Carrinho</a>
        <a href="checkout">Checkout</a>
        <a href="contato">Contato</a>
      </nav>
      <div class="nav-actions">
        <a class="btn btn-light" href="carrinho">Meu carrinho</a>
        <a class="btn btn-primary" href="catalogo">Comprar agora</a>
      </div>
    </div>
  </header>
  @yield('conteudo')

  <footer class="footer">
    <div class="container footer-grid">
      <div><h4>NovaShop</h4><p>Template ecommerce institucional para apresentar, vender e converter.</p></div>
      <div><h4>Navegacao</h4><p>Catalogo, produto, carrinho, checkout e contato.</p></div>
      <div><h4>Contato</h4><p>contato@novashop.com<br/>+55 11 4000-0000</p></div>
    </div>
  </footer>
</body>
</html>