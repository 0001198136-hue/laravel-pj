@extends('index')
@section('conteudo')
  <main class="page-hero">
    <div class="container cart-grid">
      <section class="page-panel">
        <h2>Seu carrinho</h2>
        <div class="list">
          <div class="line-item">
            <img src="/assets/img/product1.svg" alt="">
            <div>
              <strong>Tenis Urban Edition</strong>
              <p class="small">Cor branco • Tamanho 40</p>
              <div class="price" data-price="289.9"></div>
            </div>
          </div>
          <div class="line-item">
            <img src="/assets/img/product4.svg" alt="">
            <div>
              <strong>Headphone Air</strong>
              <p class="small">Preto fosco • Bluetooth 5.3</p>
              <div class="price" data-price="519.9"></div>
            </div>
          </div>
        </div>
      </section>

      <aside class="summary">
        <h3>Resumo do pedido</h3>
        <div class="summary-row"><span>Subtotal</span><strong>R$ 809,80</strong></div>
        <div class="summary-row"><span>Frete</span><strong>Gratis</strong></div>
        <div class="summary-row"><span>Desconto</span><strong>R$ 40,00</strong></div>
        <div class="summary-row"><span>Total</span><strong>R$ 769,80</strong></div>
        <div class="cta-row">
          <a class="btn btn-primary" href="checkout">Continuar</a>
          <a class="btn btn-light" href="catalogo">Adicionar mais</a>
        </div>
      </aside>
    </div>
  </main>

@endsection