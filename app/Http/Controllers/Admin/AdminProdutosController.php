<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto; 
use Illuminate\Support\Facades\File;

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
        $categorias = DB::table('produtos')->distinct()->pluck('categoria');
        $imagens = collect(File::files(public_path('Assets/img')))
            ->map(fn($file) => $file->getFilename())
            ->values();
        return view('admin.produtos', compact('produtos', 'categorias', 'imagens'));
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
            'categoria' => $request->input('categoria') === '__nova__'
                ? $request->input('categoria_nova')
                : $request->input('categoria'),
            'preco'     => $request->input('preco'),
            'imagem'    => $request->input('nomeimagem') ?? 'g18.png',
            'test'      => 1.0,
            'estoque'   => $request->input('estoque') ?? 0
        ]);
        return redirect()->to('/admin/produtos')->with('sucesso', 'Produto cadastrado!');
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return redirect()->back()->with('erro', 'Produto não encontrado!');
        }
        $produto->update([
            'nome'      => $request->input('nome'),
            'categoria' => $request->input('categoria') === '__nova__'
                ? $request->input('categoria_nova')
                : $request->input('categoria'),
            'preco'     => $request->input('preco'),
            'imagem'    => $request->input('nomeimagem') ?? $produto->imagem,
            'estoque'   => $request->input('estoque') ?? $produto->estoque,
        ]);
        return redirect()->to('/admin/produtos')->with('sucesso', 'Produto atualizado!');
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
        $categorias = DB::table('produtos')->distinct()->pluck('categoria');
        $imagens = collect(File::files(public_path('Assets/img')))
            ->map(fn($file) => $file->getFilename())
            ->values();
        $produtoEdit = Produto::find($id);
        if (!$produtoEdit) {
            return view('admin.produtos', compact('produtos', 'categorias', 'imagens'));
        }
        return view('admin.produtos', compact('produtos', 'categorias', 'produtoEdit', 'imagens'));
    }
}