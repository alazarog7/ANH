@extends('layouts.usuario')
@section('cabecera')
    <link href="{{ asset('css/componentes/switch.css') }}" rel="stylesheet">

    <!--<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">-->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">x
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/item.js')}}"></script>


@endsection
@section('content')
    <div class="container">
        <div class="row">

            <a href="{{route('item.create')}}" ><button class="btn btn-outline-success">Nuevo Item</button></a>
            <div style="padding-left: 10px;">
                <a href="{{route('familia.create')}}" ><button class="btn btn-outline-success">Nuevo Familia</button></a>
            </div>
        </div>
        <br>
        <div class="row">
            <table class="table table-striped" id="tabla">
                <thead>
                <tr>
                    <th scope="col">Familia</th>
                    <th scope="col">Dispositivo</th>
                    <th scope="col">Codigo Activo</th>
                    <th scope="col">Codigo SAF</th>
                    <th scope="col">IP</th>
                    <th scope="col">
                        <a href="" data-target="#modal-item-buscador" class="btn btn-success btn-lg" data-toggle="modal"><i class="fa fa-search"></i></a>
                        @include('item.item-modal-filter')
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($lista as $i)
                <tr>
                    <td>{{strtoupper($i->FAMILIA)}}</td>
                    <td>{{strtoupper($i->NOMBRE)}}</td>
                    <td>{{strtoupper($i->CODIGO_ACTIVO)}}</td>
                    <td>{{strtoupper($i->CODIGO_SAF)}}</td>
                    <td>{{$i->IP}}</td>
                    <td>
                        <a href="{{route('item.edit',[$i->ID_ITEM])}}"  class="btn btn-outline-success btn-lg"><i class="fa fa-pencil"></i></a>
                        <a href="" data-target="#modal-delete-{{$i->ID_ITEM}}" data-toggle="modal"><button class="btn btn-outline-danger btn-lg"><i class="fa fa-trash"></i></button></a>
                        @include('item.item-modal-vigente')
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection