@extends('layouts.masteruser')

@section('title' ,'')

@section('username' ,$usuario->name)
@section('usermail' ,$usuario->email)
@section('userfoto',$usuario->foto)

@section('content')
    <div id="page-content">

        <div class="row">
            <div class="col-sm-3 col-lg-6">
                <div class="panel panel-purple panel-colorful">
                    <div class="panel-body text-center clearfix">
                        <div class="col-sm-4 pad-top">
                            <div class="text-lg">
                                <p class="text-3x text-thin text-semibold">{{$dashboard['contactos']}}</p>
                            </div>
                            <p class="text-sm text-bold text-uppercase">Contactos</p>
                        </div>
                        <div class="col-sm-8">
                            <button class="btn mar-ver text-bold">Gestiona tus listas de contactos</button>
                            <p class="text-xs">Organiza tus contactos y arma de manera eficiente tus campañas.</p>
                            <ul class="list-unstyled text-center bord-top pad-top mar-no row">
                                <li class="col-xs-12">
                                    <span class="text-lg text-semibold text-main">28</span>
                                    <p class="text-sm text-main mar-no">Listas de contactos activas</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-6">
                <div class="panel panel-warning panel-colorful">
                    <div class="panel-body text-center clearfix">
                        <div class="col-sm-4 pad-top">
                            <div class="text-lg">
                                <p class="text-3x text-thin text-semibold">{{$dashboard['campañas']}}</p>
                            </div>
                            <p class="text-sm text-bold text-uppercase">Campañas</p>
                        </div>
                        <div class="col-sm-8">
                            <button class="btn mar-ver text-bold">Armá tu próxima campaña</button>
                            <p class="text-xs">Llegá a quien quieras en 3 simples pasos.</p>
                            <ul class="list-unstyled text-center bord-top pad-top mar-no row">
                                <li class="col-xs-4">
                                    <span class="text-lg text-semibold text-main">1</span>
                                    <p class="text-sm text-main mar-no">Creá tu campaña</p>
                                </li>
                                <li class="col-xs-4">
                                    <span class="text-lg text-semibold text-main">2</span>
                                    <p class="text-sm text-main mar-no">Eligí los contactos</p>
                                </li>
                                <li class="col-xs-4">
                                    <span class="text-lg text-semibold text-main">3</span>
                                    <p class="text-sm text-main mar-no">Esperá los resultados</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-6">
                <div class="panel panel-success panel-colorful">
                    <div class="panel-body text-center clearfix">
                        <div class="col-sm-4 pad-top">
                            <div class="text-lg">
                                <p class="text-3x text-thin text-semibold">{{$dashboard['creditos']}}</p>
                            </div>
                            <p class="text-sm text-bold text-uppercase">Créditos</p>
                        </div>
                        <div class="col-sm-8">
                            <button class="btn mar-ver text-bold">Compra créditos ahora!</button>
                            <ul class="list-unstyled text-center bord-top pad-top mar-no row">
                                <li class="col-xs-4">
                                    <span class="text-lg text-semibold text-main"></span>
                                    <p class="text-sm text-main mar-no"></p>
                                </li>
                                <li class="col-xs-4">
                                    <span class="text-lg text-semibold text-main"></span>
                                    <p class="text-sm text-main mar-no"></p>
                                </li>
                                <li class="col-xs-4">
                                    <span class="text-lg text-semibold text-main"></span>
                                    <p class="text-sm text-main mar-no"></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-sm-3 col-lg-6">
                <div class="panel panel-info panel-colorful">
                    <div class="panel-body text-center clearfix">
                        <div class="col-sm-4 pad-top">
                            <div class="text-lg">
                                <p class="text-3x text-thin text-semibold">{{$dashboard['archivos']}}</p>
                            </div>
                            <p class="text-sm text-bold text-uppercase">Archivos</p>
                        </div>
                        <div class="col-sm-8">
                            <button class="btn mar-ver text-bold">Visitar Galería</button>
                            <ul class="list-unstyled text-center bord-top pad-top mar-no row">
                                <li class="col-xs-4">
                                    <span class="text-lg text-semibold text-main">{{$dashboard['imagenes']}}</span>
                                    <p class="text-sm text-main mar-no">Imágenes</p>
                                </li>
                                <li class="col-xs-4">
                                    <span class="text-lg text-semibold text-main">{{$dashboard['audiovideo']}}</span>
                                    <p class="text-sm text-main mar-no">Audio/Video</p>
                                </li>
                                <li class="col-xs-4">
                                    <span class="text-lg text-semibold text-main">{{$dashboard['plantillas']}}</span>
                                    <p class="text-sm text-main mar-no">Plantillas</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
@endsection