@extends('index')
@section('conteudo')
  <main class="page-hero">  
    <div class="container page-panel">
      <div class="section-head">
        <div>
          <h2>Catalogo completo</h2>
          <p>Use filtros visuais para destacar categorias, colecoes e campanhas sazonais.</p>
        </div>
      </div>

      <div class="catalog-toolbar">
        <input type="text" placeholder="Buscar produto" />
        <select><option>Todas as categorias</option><option>Moda</option><option>Tech</option><option>Acessorios</option></select>
        <select><option>Mais vendidos</option><option>Menor preco</option><option>Maior preco</option></select>
      </div>

      <div class="grid-4" style="margin-top:22px">
        <article class="card"><img src="/assets/img/product1.svg" alt=""><div class="product-body"><span class="tag">Moda</span><h3>Tenis Urban</h3><div class="price" data-price="289.9"></div><div class="meta"><span>Pronta entrega</span><a href="produto ">Ver detalhes</a></div></div></article>
        <article class="card"><img src="/assets/img/product2.svg" alt=""><div class="product-body"><span class="tag">Acessorios</span><h3>Mochila Pro</h3><div class="price" data-price="229.9"></div><div class="meta"><span>Top seller</span><a href="produto">Ver detalhes</a></div></div></article>
        <article class="card"><img src="/assets/img/product3.svg" alt=""><div class="product-body"><span class="tag">Lifestyle</span><h3>Relogio Edge</h3><div class="price" data-price="399.9"></div><div class="meta"><span>Premium</span><a href="produto">Ver detalhes</a></div></div></article>
        <article class="card"><img src="/assets/img/product4.svg" alt=""><div class="product-body"><span class="tag">Tech</span><h3>Headphone Air</h3><div class="price" data-price="519.9"></div><div class="meta"><span>Frete gratis</span><a href="produto">Ver detalhes</a></div></div></article>
        <article class="card"><img src="/assets/img/product2.svg" alt=""><div class="product-body"><span class="tag">Travel</span><h3>Mochila City</h3><div class="price" data-price="199.9"></div><div class="meta"><span>Novo</span><a href="produto">Ver detalhes</a></div></div></article>
        <article class="card"><img src="/assets/img/product1.svg" alt=""><div class="product-body"><span class="tag">Casual</span><h3>Tenis Prime</h3><div class="price" data-price="259.9"></div><div class="meta"><span>Conforto</span><a href="produto">Ver detalhes</a></div></div></article>
        <article class="card"><img src="/assets/img/product4.svg" alt=""><div class="product-body"><span class="tag">Audio</span><h3>Fone Lite</h3><div class="price" data-price="179.9"></div><div class="meta"><span>Bluetooth</span><a href="produto">Ver detalhes</a></div></div></article>
        <article class="card"><img src="/assets/img/product3.svg" alt=""><div class="product-body"><span class="tag">Classic</span><h3>Watch Core</h3><div class="price" data-price="349.9"></div><div class="meta"><span>Elegante</span><a href="produto">Ver detalhes</a></div></div></article>
      </div>
    </div>
  </main>
  @endsection