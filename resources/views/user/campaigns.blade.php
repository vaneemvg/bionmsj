@extends('layouts.masteruser')

@section('title' ,'Campañas')

@section('content')

    <table id="demo-foo-accordion" class="table toggle-arrow-tiny table-bordered" data-page-size="5">
        <thead>
        <tr>

            <th data-sort-initial="true" data-toggle="true">Campaña</th>
            <th>Contactos</th>
            <th data-sort-ignore="true">Descargar</th>
            <th>Estado</th>
            <th data-hide="phone, tablet">Creación</th>
            <th data-hide="phone, tablet">Usuario</th>
            <th data-sort-ignore="true" class="min-width"></th>
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
                        <a id="btn-addrow" class="btn btn-purple" href="{{ route('campaigns.create') }}"><i
                                    class="pli-plus"></i> Nueva Campaña
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <tbody>
        @foreach($campañas as $campaña)
            <tr>

                <td>{{$campaña->nombre}}</td>
                <td>ver</td>
                <td>no hay informe para descargar</td>
                @if($campaña->estado == "FINALIZADA")
                    <td><span class="label label-table label-success">Finalizada</span></td>
                @elseif($campaña->estado == "PENDIENTE")
                    <td><span class="label label-table label-info">Pendiente</span></td>
                @else
                    <td><span class="label label-table label-warning">Borrador</span></td>
                @endif
                <td>{{$campaña->created_at}}</td>
                <td>{{$campaña->user->name}}</td>

                <td>
                    <i class="pli-trash icon-2x alert-icon" aria-hidden="true"></i>
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