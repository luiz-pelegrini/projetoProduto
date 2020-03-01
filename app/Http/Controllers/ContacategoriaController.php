<?php

namespace App\Http\Controllers;

use App\ContaCategoria;
use App\Produtos;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Http\Request;

class ContacategoriaController extends Controller
{

    private $modelsContaCategoria;

    public function __construct()
    {
        $this->modelsContaCategoria = new ContaCategoria();
        $this->modelsProdutos = new Produtos();
    }

    public static function index() {

        if (Auth::check() == false) {
            return view('auth.login', [
            ]);
        }

        $result = ContaCategoria::all();
        return view('contacategoria.index', [
            'contacategoria' => $result
        ]);
    }

    public static function novoView() {

        if (Auth::check() == false) {
            return view('auth.login', [
            ]);
        }

        return view('contacategoria.create');
    }

    public static function post(Request $params) {

        if (Auth::check() == false) {
            return view('auth.login', [
            ]);
        }

        ContaCategoria::create($params->all());

        return redirect("/contacategoria")->with("message", "Conta categoria criada com sucesso.");
    }

    public function put(Request $params) {

        if (Auth::check() == false) {
            return view('auth.login', [
            ]);
        }

        $contaCategoria = $this->getContaCategoria($params->ID_CONTACATEGORIA_CC);

        $contaCategoria->update($params->all());
        return redirect("/contacategoria")->with("message", "Produto alterado com sucesso.");
    }

    public function editarView($id){

        if (Auth::check() == false) {
            return view('auth.login', [
            ]);
        }

        return view("contacategoria.edit", [
            'contacategoria' => $this->getContaCategoria($id)
        ]);
    }

    public function delete(Request $params){

        if (Auth::check() == false) {
            return view('auth.login', [
            ]);
        }

        $teste = $this->modelsProdutos::where('ID_CONTACATEGORIA_CC', $params->ID_CONTACATEGORIA_CC)->get();
        if(count($teste) > 0) {
            throw new Exception("Não é possivel deletar a conta categoria pois já existe produto vinculado.");
        }
        $contaCategoria = $this->getContaCategoria($params->ID_CONTACATEGORIA_CC);
        $contaCategoria->delete($params->all());
        return redirect("/contacategoria")->with("message", "Conta categoria excluida com sucesso.");
    }

    protected function getContaCategoria($id) {

        return $this->modelsContaCategoria->find($id);
    }
}
