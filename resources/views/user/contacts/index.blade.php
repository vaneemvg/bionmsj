@extends('layouts.masteruser')

@section('title' ,'Contactos')

@section('content')

    <table id="demo-foo-accordion" class="table toggle-arrow-tiny table-bordered" data-page-size="5">
        <thead>
        <tr>
            <th data-toggle="true">Nombre</th>
            <th>Teléfono</th>
            <th data-sort-ignore="true">Listas</th>
            <th data-hide="all">Creación</th>
            <th data-hide="all">Usuario</th>
            <th data-hide="all">Suscripto</th>
        </tr>
        </thead>
        <div class="pad-btm form-inline">
            <div class="row">
                <div class="col-sm-6 text-xs-center text-left">
                    <div class="form-group">
                        <input id="input-search2" type="text" placeholder="Search" class="form-control"
                               autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-6 text-xs-center text-right">
                    <div class="form-group">
                        <a id="btn-addrow" class="btn btn-purple" href="{{ route('contactos.create') }}"><i
                                    class="pli-plus"></i> Nuevo Contacto
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <tbody>
        @foreach($contactos as $contacto)
            <tr>

                <td>{{$contacto->nombre}}</td>
                <td>{{$contacto->telefono}}</td>
                <td>
                    <div class="bootstrap-tagsinput">
                        @foreach($contacto->listas as $lista)
                            <span class="tag label label-primary">{{$lista->nombre}}
                                <span data-role="remove"></span>
                                    </span>
                        @endforeach
                    </div>
                </td>
                <td>{{$contacto->created_at}}</td>
                <td>{{$contacto->user->name}}</td>
                @if($contacto->estado == "SUSCRIPTO")
                    <td><span class="label label-success">Sí</span></td>
                @else
                    <td><span class="label label-dark">No</span></td>
                @endif

            </tr>
        @endforeach

        </tbody>
        <!--<tfoot>
        <tr>
            <td colspan="5">
                <div class="text-right">
                    <ul class="pagination"></ul>
                </div>
            </td>
        </tr>
        </tfoot>-->
    </table>

@endsection