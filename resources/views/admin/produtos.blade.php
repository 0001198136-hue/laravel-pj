@extends('admin.index')
@section('admin')
    <main class="content">
      <div class="notice">Acao simulada com sucesso. Conecte esta tela ao seu backend ou CMS.</div>
      <div class="top">
        <div><h1>Gestao de produtos</h1><p class="small">Cadastre itens, altere preco e acompanhe estoque.</p></div>
        <button class="btn btn-primary">Novo produto</button>
      </div>

      <section class="grid-main">
        <div class="card">
          <h3>Catalogo</h3>
          <table class="table">
            <thead><tr><th>Produto</th><th>Categoria</th><th>Preco</th><th>Estoque</th></tr></thead>
            <tbody>
              <tr><td>Tenis Urban</td><td>Moda</td><td>R$ 289,90</td><td>84</td></tr>
              <tr><td>Mochila Pro</td><td>Acessorios</td><td>R$ 229,90</td><td>58</td></tr>
              <tr><td>Relogio Edge</td><td>Lifestyle</td><td>R$ 399,90</td><td>19</td></tr>
              <tr><td>Headphone Air</td><td>Tech</td><td>R$ 519,90</td><td>7</td></tr>
            </tbody>
          </table>
        </div>

        <div class="card">
          <h3>Cadastrar ou editar</h3>
          <form class="list">
            <input type="text" placeholder="Nome do produto" required />
            <select><option>Selecione a categoria</option><option>Moda</option><option>Tech</option><option>Acessorios</option></select>
            <div class="grid-3">
              <input type="text" placeholder="Preco" />
              <input type="text" placeholder="Estoque" />
              <input type="text" placeholder="SKU" />
            </div>
            <textarea placeholder="Descricao do produto"></textarea>
            <button class="btn btn-primary" type="submit">Salvar produto</button>
          </form>
        </div>
      </section>
      </main>
      @endsection