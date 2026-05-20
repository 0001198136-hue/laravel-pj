<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public $produtos = [
        ['id' => 1, 'nome' => 'desert eagle', 'preco' => 25000.00, 'imagem' => 'dg.png', 'categoria' => 'pistola', 'teste' => '5.0'],
        ['id' => 2, 'nome' => 'glock g18 auto', 'preco' => 15000.00, 'imagem' => 'g18.png', 'categoria' => 'pistola' , 'teste' => '5.0'],
        ['id' => 3, 'nome' => 'glock g19x', 'preco' => 9000.00, 'imagem' => 'glockg19x.png', 'categoria' => 'pistola', 'teste' => '5.0'],
        ['id' => 4, 'nome' => 'fal', 'preco' => 200000.00, 'imagem' => 'fal.png', 'categoria' => 'fuzil', 'teste' => '10.0']
    ];


    public function home(){

    $produtos = $this->produtos;
        return view('home', compact('produtos'));
    }

    public function catalogo(){
        
        return view('catalogo');
    }

    public function produto(Request $request){
        $produtos = $this->produtos;
        $id = $request->get('id');
        $produto = array_filter($produtos, function($p) use ($id) {
            return $p['id'] == $id;
        });
        $produto = reset($produto);

        return view('produto', compact('produtos') + compact('produto'));
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
        return view('admin.produtos');
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
}