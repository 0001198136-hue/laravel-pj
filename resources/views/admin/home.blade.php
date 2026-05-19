@extends('admin.index')
@section('admin')
        <main class="content">
        <div class="top">
            <div>
            <h1>Dashboard administrativo</h1>
            <p class="small">Visao geral do desempenho da loja, pedidos, clientes e estoque.</p>
            </div>
            <input class="search" type="text" placeholder="Buscar pedido, cliente ou produto" />
        </div>

        <section class="hero">
            <div>
            <span class="pill success">Sistema online</span>
            <h2>Painel elegante para operacao do ecommerce.</h2>
            <p>Controle vendas, analise pedidos e gerencie catalogo em uma interface clara e moderna.</p>
            </div>
            <img src="/assets_admin/img/admin-cover.svg" alt="Painel administrativo" />
        </section>

        <section class="grid-4" style="margin-top:18px">
            <div class="card metric"><div class="label">Vendas do mes</div><div class="value">R$ 84.950</div><span class="pill success">+12.4%</span></div>
            <div class="card metric"><div class="label">Pedidos hoje</div><div class="value">148</div><span class="pill success">Operacao estavel</span></div>
            <div class="card metric"><div class="label">Clientes ativos</div><div class="value">2.431</div><span class="pill warning">+198 novos</span></div>
            <div class="card metric"><div class="label">Itens em baixo estoque</div><div class="value">17</div><span class="pill danger">Atencao</span></div>
        </section>

        <section class="grid-main" style="margin-top:18px">
            <div class="card">
            <h3>Pedidos recentes</h3>
            <table class="table">
                <thead><tr><th>Pedido</th><th>Cliente</th><th>Status</th><th>Total</th></tr></thead>
                <tbody>
                <tr><td>#10528</td><td>Mariana Alves</td><td><span class="pill success">Pago</span></td><td>R$ 519,90</td></tr>
                <tr><td>#10527</td><td>Lucas Silva</td><td><span class="pill warning">Separando</span></td><td>R$ 289,90</td></tr>
                <tr><td>#10526</td><td>Rafaela Costa</td><td><span class="pill danger">Aguardando</span></td><td>R$ 769,80</td></tr>
                <tr><td>#10525</td><td>Pedro Lima</td><td><span class="pill success">Enviado</span></td><td>R$ 199,90</td></tr>
                </tbody>
            </table>
            </div>

            <div class="card">
            <h3>Atividades</h3>
            <div class="list">
                <div class="row"><div class="avatar">M</div><div><strong>Produto atualizado</strong><div class="small">Tenis Urban recebeu nova variante</div></div></div>
                <div class="row"><div class="avatar">L</div><div><strong>Novo pedido aprovado</strong><div class="small">Pedido #10528 pago via Pix</div></div></div>
                <div class="row"><div class="avatar">R</div><div><strong>Estoque em alerta</strong><div class="small">Headphone Air com poucas unidades</div></div></div>
                <div class="row"><div class="avatar">C</div><div><strong>Cliente cadastrado</strong><div class="small">Novo lead convertido em cliente</div></div></div>
            </div>
            </div>
        </section>
        </main>
@endsection