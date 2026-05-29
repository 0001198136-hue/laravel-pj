@extends('admin.index')
@section('admin')
    <main class="content">
      
      @if(session('sucesso'))
        <div class="notice" style="background-color: #d4edda; color: #155724; border-left: 5px solid #28a745;">
            {{ session('sucesso') }}
        </div>
      @endif

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
            @foreach($produtos as $produto)
              <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->categoria}}</td>
                <td>R$ {{number_format($produto->preco, 2, ',', '.')}}</td>
                <td>{{$produto->test ?? '♾️'}}</td>
              </tr>
              
      @endforeach
            </tbody>
          </table>
        </div>

        <div class="card">
          <h3>Cadastrar ou editar</h3>
          <form id="meuFormulario" class="list" action="{{ route('produtos.store') }}" method="POST">
            @csrf
            
            <input type="text" name="nome" placeholder="Nome do produto" required />
            
            <select name="categoria">
              <option value="">Selecione a categoria</option>
              @foreach($produtos as $produto)
                <option value="{{$produto->categoria}}">{{$produto->categoria}}</option>
              @endforeach
              <input type="text" name="categoria" placeholder="Categoria do produto" />
              
            </select>

            <input type="text" name="preco" placeholder="Preco" />
            <input type="text" name="imagem" placeholder="Nome da imagem (ex: g18.png)" />
            <input type="text" name="estoque" placeholder="Quantidade em estoque (deixe vazio para estoque infinito)" />


            <button class="btn btn-primary" type="button" onclick="document.getElementById('meuFormulario').submit();">Salvar produto</button>
        </form>
        </div>
      </section>
      </main>
@endsection