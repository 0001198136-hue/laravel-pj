@extends('admin.index')
@section('admin')
    <main class="content">
      <div class="top">
        <div><h1>Clientes</h1><p class="small">Base de compradores e relacionamento.</p></div>
      </div>

      <section class="grid-3">
        <div class="card"><h3>Clientes ativos</h3><div class="value" style="font-size:2rem;font-weight:800">2.431</div><p class="small">Com compras nos ultimos 90 dias</p></div>
        <div class="card"><h3>Taxa de retorno</h3><div class="value" style="font-size:2rem;font-weight:800">38%</div><p class="small">Clientes recorrentes</p></div>
        <div class="card"><h3>Ticket medio</h3><div class="value" style="font-size:2rem;font-weight:800">R$ 317</div><p class="small">Media por pedido</p></div>
      </section>

      <section class="card" style="margin-top:18px">
        <table class="table">
          <thead><tr><th>Cliente</th><th>Email</th><th>Ultima compra</th><th>Perfil</th></tr></thead>
          <tbody>
            <tr><td>Mariana Alves</td><td>mariana@email.com</td><td>01/04/2026</td><td><span class="pill success">VIP</span></td></tr>
            <tr><td>Lucas Silva</td><td>lucas@email.com</td><td>01/04/2026</td><td><span class="pill warning">Recorrente</span></td></tr>
            <tr><td>Rafaela Costa</td><td>rafaela@email.com</td><td>31/03/2026</td><td><span class="pill success">Ativa</span></td></tr>
            <tr><td>Pedro Lima</td><td>pedro@email.com</td><td>31/03/2026</td><td><span class="pill danger">Inativa</span></td></tr>
          </tbody>
        </table>
      </section>
    </main>
@endsection