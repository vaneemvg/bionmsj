@extends('layouts.masteruser')

@section('title' ,'Listas de Contactos')

@section('content')

    <table id="demo-foo-accordion" class="table toggle-arrow-tiny " data-page-size="5">
        <thead>
        <tr>
            <th data-sort-ignore="true" class="min-width"></th>
            <th data-sort-initial="true" data-toggle="true">Lista</th>
            <th>Contactos</th>
            <th data-hide="phone, tablet">Estado</th>
            <th data-hide="phone, tablet">Creación</th>
            <th data-hide="phone, tablet">Usuario</th>
            <th data-hide="phone, tablet">Tags</th>

        </tr>
        </thead>
        <div class="pad-btm form-inline">
            <div class="row">

                <div class="col-sm-6 text-xs-center text-left">
                    <div class="form-group">
                        <input id="input-search2" type="text" placeholder="Search" class="form-control"
                               autocomplete="off">
                    </div>
                    <button class="btn btn-default" type="button" name="refresh" aria-label="refresh" title="Refresh"><i
                                class="glyphicon pli-repeat-2"></i></button>
                </div>
                <div class="col-sm-6 text-xs-center text-right">
                    <div class="form-group">
                        <a id="btn-addrow" class="btn btn-purple" href="{{ route('listas.create') }}"><i
                                    class="pli-plus"></i> Nueva Lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <tbody>
        @foreach($listas as $lista)
            <tr>
                <td>
                    <input id="form-checkbox" class="checkbox" type="checkbox">
                </td>
                <td>{{$lista->nombre}}</td>
                <td>{{$lista->contactos_count}}</td>
                @if($lista->estado == "ACTIVA")
                    <td><span class="label label-success">Activa</span></td>
                @else
                    <td><span class="label label-dark">Inactiva</span></td>
                @endif
                <td>{{$lista->created_at}}</td>
                <td>{{$lista->user->name}}</td>
                <td>
                    <div class="bootstrap-tagsinput">
                        @foreach($lista->tags as $tag)
                            <span class="tag label label-primary">{{$tag->name}}
                                <span data-role="remove"></span>
                                    </span>
                        @endforeach
                    </div>
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
    {!! $listas->render() !!}
    <!--===================================================-->
    <!-- End Foo Table - Add & Remove Rows -->


@endsection