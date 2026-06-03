<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto; 

class AdminProdutosController extends Controller
{
public function login()
    {
        return view('admin.login');
    }

    public function index()
    {
        return view('admin.home');


    }

    public function produtos()
    {
        $produtos = DB::table('produtos')->get()->toArray();
        return view('admin.produtos', compact('produtos'));
    }

    public function pedidos()
    {
        return view('admin.pedidos');
    }

    public function clientes()
    {
        return view('admin.clientes');
    }

    public function configuracoes()
    {
        return view('admin.configuracoes');
    }

    public function perfil(Request $request)
    {
        return view('admin.perfil');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome'      => $request->input('nome'),
            'categoria' => $request->input('categoria'),
            'preco'     => $request->input('preco'),
            'imagem'    => $request->input('imagem') ?? 'g18.png',
            'test'      => 1.0,
            'estoque'   => 999
        ]);

        return redirect()->back()->with('sucesso', 'Produto cadastrado com sucesso usando Model!');
    }

    public function destroy(Request $request, $id)
        {
            $produto = Produto::find($id);
            
            if ($produto) {
                $produto->delete();
                return redirect()->back()->with('sucesso', 'Produto excluído com sucesso!');
            }

            return redirect()->back()->with('erro', 'Produto não encontrado!');
        }

    public function edit($id)
        {
            $produtos = DB::table('produtos')->get()->toArray();
            $produtoEdit = Produto::find($id);
            
            if (!$produtoEdit) {
                return view('admin.produtos', compact('produtos'));
            }

            return view('admin.produtos', compact('produtos', 'produtoEdit'));
        }

    public function update(Request $request, $id)
{
    $produto = Produto::find($id);
    
    if (!$produto) {
        return redirect()->back()->with('erro', 'Produto não encontrado!');
    }

    $produto->update([
        'nome'      => $request->input('nome'),
        'categoria' => $request->input('categoria'),
        'preco'     => $request->input('preco'),
        'imagem'    => $request->input('imagem') ?? $produto->imagem,
        'estoque'   => $request->input('estoque') ?? $produto->estoque,
    ]);

    return redirect()->route('produtos')->with('sucesso', 'Produto atualizado!');
}
}


    