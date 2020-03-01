@extends('layouts.app')

@section("content")

    <style>
        .btn-action {
            padding: 5px;
            float: right;
        }
    </style>

    <div>
        @foreach($produtos as $produto)
        <div class="col-md-4">

            <div class="panel panel-info">
                <div class="panel-heading">

                    {{$produto->ST_DESCRICAO_PRD}}
                    <a href="{{url("/produtos/$produto->ID_PRODUTO_PRD/editar")}}" class="btn btn-xs btn-primary btn-action" >
                    <i class="glyphicon glyphicon-pencil">
                    </i>
                    </a>

                    <a href="{{url("/produtos/$produto->ID_PRODUTO_PRD/delete")}}" class="btn btn-xs btn-danger btn-action" >
                    <i class="glyphicon glyphicon-trash">
                    </i>
                    </a>
                </div>
                <div class="panel-body">
                    {{$produto->ID_CONTACATEGORIA_CC}}
                </div>
            </div>

        </div>
        @endforeach
    </div>
@endsection