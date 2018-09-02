@extends('layouts.master')

@section('listaction')
    <ul id="mainnav-menu" class="list-group">

        <!--Category name-->
        <li class="list-header">ACCIONES</li>

        <!--Menu list item-->
        <li>
            <a href="{{ url('/admin/clientes')}}">
                <i class="pli-handshake"></i>
                <span class="menu-title">
												<strong>Clientes</strong>
											</span>
            </a>
        </li>

        <!--Menu list item-->
        <li>
            <a href="{{ url('/admin/users')}}">
                <i class="pli-business-man-woman"></i>
                <span class="menu-title">
												<strong>Usuarios</strong>
											</span>
            </a>
        </li>

        <!--Menu list item-->
        <li>
            <a href="{{ url('/admin/campaigns')}}">
                <i class="pli-mail-send"></i>
                <span class="menu-title">
												<strong>Campañas</strong>
											</span>
            </a>
        </li>

        <!--Menu list item-->
        <li>
            <a href="{{ url('/admin/archivos')}}">
                <i class="pli-photos"></i>
                <span class="menu-title">
												<strong>Galería</strong>

											</span>
            </a>
        </li>


    </ul>
@endsection