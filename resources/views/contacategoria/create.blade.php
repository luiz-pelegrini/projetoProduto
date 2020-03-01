@extends('layouts.app')

@section("content")
    <div class="col-md-12">
        <h3>Novo conta categoria</h3>
    </div>

    <div class="col-md-6 well">
        <form col-md-12 action="{{url('/contacategoria/post')}}" method="POST">
            {{csrf_field()}}

            <div class="form-group col-md-12">
                <label class="control-label"></label>
                    <input type = "text" name="ST_DESCRICAO_CC" class="form-control" placeholder="Nome conta categoria">
            </div>

            <div class="col-md-12">
                <button style = "float:right"class="btn btn-primary">Salvar</button>
            </div>

        </form>
    </div>

@endsection