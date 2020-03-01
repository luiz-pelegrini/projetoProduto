<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{

    private $modelsProdutos;

    public function __construct()
    {
        $this->modelsProdutos = new Produtos();
    }

    public function index() {

        if (Auth::check() == false) {
            return view('auth.login', [
            ]);
        }
        $result = Produtos::all();
        return view('produtos.index', [
            'produtos' => $result
        ]);
    }

    public function novoView() {

        if (Auth::check() == false) {
            return view('auth.login', [
            ]);
        }
        return view('produtos.create');
    }

    public function post(Request $params) {

        Produtos::create($params->all());

        return redirect("/produtos")->with("message", "Produto criado com sucesso.");
    }

    public function put(Request $params) {

        $produto = $this->getPessoa($params->ID_PRODUTO_PRD);

        $produto->update($params->all());
        return redirect("/produtos")->with("message", "Produto alterado com sucesso.");
    }

    public function editarView($id){

        return view("produtos.edit", [
            'produto' => $this->getPessoa($id)
        ]);
    }

    public function delete(Request $params){

        $produto = $this->getPessoa($params->ID_PRODUTO_PRD);
        $produto->delete($params->all());
        return redirect("/produtos")->with("message", "Produto excluido com sucesso.");
    }

    protected function getPessoa($id) {

        return $this->modelsProdutos->find($id);
    }
}
