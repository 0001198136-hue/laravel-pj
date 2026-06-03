<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto; 

class WebSiteController extends Controller
{
    

    public function home(){
        $produtos = Produto::all(); // Pega todos os produtos de forma linda
        return view('home', compact('produtos'));
    }

    public function catalogo(){
        $produtos = DB::table('produtos')->get()->toArray();
        return view('catalogo', compact('produtos'));
    }

    public function produto(Request $request)
{
    $id = $request->get('id');
    $produto = DB::table('produtos')->where('id', $id)->first(); if (!$produto) {
        abort(404, 'Produto não encontrado');
    }
    return view('produto', compact('produto'));
}

    public function carrinho(){
        return view('carrinho');
    }

    public function checkout(){
        return view('checkout');
    }

    public function contato(){
        return view('contato');
    }
    


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
        return view('website.perfil');
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

