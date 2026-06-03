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
        <a href="/admin/produtos"  class="btn btn-primary">Novo produto</a>
      </div>

      <section class="grid-main">
      
        <div class="card">
          <h3>Catalogo</h3>
          <table class="table">
            <thead><tr><th>Produto</th><th>Categoria</th><th>Preco</th><th>Estoque</th></tr></thead>
            <tbody>
            @foreach($produtos as $p)
                <tr>
                  <td>{{$p->nome}}</td> 
                  <td>{{$p->categoria}}</td>
                  <td>R$ {{number_format($p->preco, 2, ',', '.')}}</td>
                  <td>{{$p->test ?? '♾️'}}</td>
                  <td>  
                    <a href="{{ route('produtos.edit', $p->id) }}" class="btn btn-delete">Editar</a>
                    <br>
                    <form action="{{ route('produtos.destroy', $p->id) }}" method="POST"
                          onsubmit="return confirm('Tem certeza?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Delete</button>
                    </form>  
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="card">
          <h3>Cadastrar ou editar</h3>
          <form id="meuFormulario" class="list" action="{{ isset($produtoEdit) ? route('produtos.update', $produtoEdit->id) : route('produtos.store') }}" method="POST">
            @csrf
            @if(isset($produtoEdit))
                @method('PUT')
            @endif

            <input value="{{ $produtoEdit->nome ?? '' }}" type="text" name="nome" placeholder="Nome do produto" required />
            
            <select name="categoria">
              <option value="{{ $produtoEdit->categoria ?? '' }}">{{ $produtoEdit->categoria ?? 'Selecione a categoria' }}</option>
              @foreach($produtos as $p)
                <option value="{{$p->categoria}}">{{$p->categoria}}</option>
              @endforeach
            </select>

            <input value="{{ $produtoEdit->preco ?? '' }}" type="text" name="preco" placeholder="Preco" />
            <input value="{{ $produtoEdit->imagem ?? '' }}" type="text" name="imagem" placeholder="Nome da imagem (ex: g18.png)" />
            <input value="{{ $produtoEdit->estoque ?? '' }}" type="text" name="estoque" placeholder="Quantidade em estoque" />

            <button type="submit" class="btn btn-primary">Salvar produto</button> 
        </form>
        </div>
      </section>
      </main>
@endsection