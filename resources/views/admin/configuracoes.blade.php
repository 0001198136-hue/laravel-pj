@extends('admin.index')
@section('admin')
    <main class="content">
      <div class="notice">Configuracoes salvas em modo demonstrativo.</div>
      <div class="top">
        <div><h1>Configuracoes</h1><p class="small">Preferencias da loja, notificacoes e integracoes.</p></div>
      </div>

      <section class="settings-grid">
        <div class="card">
          <h3>Informacoes da loja</h3>
          <form class="list">
            <input type="text" placeholder="Nome da loja" value="NovaShop" />
            <input type="email" placeholder="Email comercial" value="contato@novashop.com" />
            <input type="text" placeholder="Telefone" value="+55 11 4000-0000" />
            <textarea placeholder="Descricao institucional">Loja moderna com foco em experiencia, branding e conversao.</textarea>
            <button class="btn btn-primary" type="submit">Salvar informacoes</button>
          </form>
        </div>

        <div class="card">
          <h3>Operacao</h3>
          <form class="list">
            <select><option>Moeda BRL</option><option>USD</option><option>EUR</option></select>
            <select><option>Notificacoes por email ativas</option><option>Desativadas</option></select>
            <select><option>Frete padrao</option><option>Retirada em loja</option><option>Entrega expressa</option></select>
            <button class="btn btn-primary" type="submit">Salvar preferencias</button>
          </form>
        </div>
      </section>
    </main>
    @endsection