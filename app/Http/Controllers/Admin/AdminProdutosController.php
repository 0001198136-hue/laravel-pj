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
}