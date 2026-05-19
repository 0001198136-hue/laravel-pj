@extends('index')
@section('conteudo')
  <main>
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy">
          <span class="kicker">Lancamento da semana</span>
          <h1>Seu ecommerce com visual premium e foco em conversao.</h1>
          <p>Template institucional com cara de marca forte, homepage impactante, catalogo, produto, carrinho, checkout e contato. Pronto para personalizacao.</p>
          <div class="cta-row">
            <a class="btn btn-primary" href="catalogo.html">Ver produtos</a>
            <a class="btn btn-light" href="contato.html">Falar com a equipe</a>
          </div>
        </div>
        <div class="hero-card">
          <img src="assets/img/hero.svg" alt="Banner principal da loja" />
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-head">
          <div>
            <h2>Destaques da colecao</h2>
            <p>Produtos com forte apelo visual e organizacao pensada para ecommerce moderno.</p>
          </div>
          <a class="btn btn-light" href="catalogo.html">Explorar catalogo</a>
        </div>

        <div class="grid-4">
          <article class="card">
            <img src="assets/img/product1.svg" alt="Tenis Urban" />
            <div class="product-body">
              <span class="tag">Moda urbana</span>
              <h3>Tenis Urban</h3>
              <div class="price" data-price="289.9"></div>
              <div class="meta"><span>4.9 estrelas</span><span>12x sem juros</span></div>
            </div>
          </article>
          <article class="card">
            <img src="assets/img/product2.svg" alt="Mochila Pro" />
            <div class="product-body">
              <span class="tag">Acessorios</span>
              <h3>Mochila Pro</h3>
              <div class="price" data-price="229.9"></div>
              <div class="meta"><span>Mais vendida</span><span>Entrega rapida</span></div>
            </div>
          </article>
          <article class="card">
            <img src="assets/img/product3.svg" alt="Relogio Edge" />
            <div class="product-body">
              <span class="tag">Lifestyle</span>
              <h3>Relogio Edge</h3>
              <div class="price" data-price="399.9"></div>
              <div class="meta"><span>Edicao premium</span><span>Garantia 1 ano</span></div>
            </div>
          </article>
          <article class="card">
            <img src="assets/img/product4.svg" alt="Headphone Air" />
            <div class="product-body">
              <span class="tag">Tech</span>
              <h3>Headphone Air</h3>
              <div class="price" data-price="519.9"></div>
              <div class="meta"><span>Noise canceling</span><span>Frete gratis</span></div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container banner">
        <div>
          <h2>Visual elegante, seções bem distribuídas e navegação fluida.</h2>
          <p>Ideal para apresentar uma marca, vender produtos e transmitir confiança logo na primeira dobra.</p>
        </div>
        <a class="btn btn-light" href="checkout.html">Testar checkout</a>
      </div>
    </section>

    <section class="section">
      <div class="container grid-3">
        <div class="feature">
          <h3>Design contemporaneo</h3>
          <p>Composicao sofisticada com gradientes, cards arredondados e hierarquia visual forte.</p>
        </div>
        <div class="feature">
          <h3>Estrutura pronta</h3>
          <p>Paginas separadas e arquitetura facil de adaptar para qualquer nicho de ecommerce.</p>
        </div>
        <div class="feature">
          <h3>Base em HTML, CSS e JS</h3>
          <p>Leve, sem dependencias pesadas, simples de editar e publicar em hospedagem comum.</p>
        </div>
      </div>
    </section>
  </main>

@endsection