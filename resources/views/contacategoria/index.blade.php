@extends('layouts.app')

@section("content")

    <style>
        .btn-action {
            padding: 5px;
            float: right;
        }
    </style>

    <div>
        @foreach($contacategoria as $cat)
        <div class="col-md-4">

            <div class="panel panel-info">
                <div class="panel-heading">
                    {{$cat->ST_DESCRICAO_CC}}
                    <a href="{{url("/contacategoria/$cat->ID_CONTACATEGORIA_CC/editar")}}" class="btn btn-xs btn-primary btn-action btn-action" >
                    <i class="glyphicon glyphicon-pencil">
                    </i>
                    </a>

                    <a href="{{url("/contacategoria/$cat->ID_CONTACATEGORIA_CC/delete")}}" class="btn btn-xs btn-danger btn-action btn-action" >
                    <i class="glyphicon glyphicon-trash">
                    </i>
                    </a>

                </div>
                <div class="panel-body">
                    {{$cat->ID_CONTACATEGORIA_CC}}
                </div>
            </div>

        </div>
        @endforeach
    </div>
@endsection