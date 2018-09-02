@extends('layouts.masteradmin')

@section('title' ,'Clientes')

@section('content')
    <table class="table" data-page-size="10">
        <thead>
        <tr>
            <th class="min-width">Id</th>
            <th data-sort-initial="true" data-toggle="true">Cliente</th>
            <th data-hide="phone, tablet">Creación</th>
            <th>Estado</th>
            <th data-sort-ignore="true"></th>
        </tr>
        </thead>
        <div>
            <div class="row">
                <div class="col-sm-6 text-xs-center text-left">
                    <div class="form-group">
                        <input id="input-search2" type="text" placeholder="Search" class="form-control"
                               autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-6 text-xs-center text-right">
                    <div class="form-group">
                        <a id="btn-addrow" class="btn btn-purple" href="{{ route('clientes.create') }}"><i
                                    class="pli-plus"></i> Nuevo Cliente
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>
                    {{$cliente->id}}
                </td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->created_at}}</td>
                @if($cliente->estado == "ACTIVO")
                    <td><a href="{{route('clientes.state', $cliente->id)}}"><span class="btn btn-success">Activo</span></a>
                    </td>
                @else
                    <td><a href="{{route('clientes.state', $cliente->id)}}"><span class="btn btn-dark">Inactivo</span></a>
                    </td>
                @endif

                <td><a href="{{route('clientes.edit', $cliente->id)}}" class="btn btn-warning pli-wrench"></a> <a
                            href="{{route('clientes.destroy', $cliente->id)}}"
                            onclick="return confirm('¿Seguro desea eliminar al cliente de manera definitiva?')"
                            class="btn btn-danger pli-remove"></a>
                </td>
            </tr>
        @endforeach

        </tbody>
        <!--<tfoot>
        <tr>
            <td colspan="6">
                <div class="text-right">
                    <ul class="pagination"></ul>
                </div>
            </td>
        </tr>
        </tfoot>-->

    </table>

@endsection