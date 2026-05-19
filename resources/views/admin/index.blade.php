<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Dashboard</title>
  <link rel="stylesheet" href="/assets_admin/css/style.css" />
  <script defer src="/assets_admin/js/script.js"></script>
</head>
<body> 
    <div class="wrapper">
        <aside class="sidebar">
            <div class="logo">
                    <span style="text-align: center;" class="logo-badge">A</span>
                    <span>NovaShop Admin</span>
            </div>
            <nav class="menu">
                <a class="active" href="/admin/index">Dashboard</a>
                <a href="/admin/produtos">Produtos</a>
                <a href="/admin/pedidos">Pedidos</a>
                <a href="/admin/clientes">Clientes</a>
                <a href="/admin/configuracoes">Configuracoes</a>
            </nav>
        </aside>

        <main class="content">
            @yield('admin')
        </main>
    </div>
</body>
</html>