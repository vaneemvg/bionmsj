@extends('layouts.master')

@section('listaction')
    <ul id="mainnav-menu" class="list-group">

        <!--Category name-->
        <li class="list-header">ACCIONES</li>

        <li>
            <a href="{{ url('/user/listas')}}">
                <i class="pli-letter-open"></i>
                <span class="menu-title">
												<strong>Listas</strong>
            </a>
        </li>

        <!--Menu list item-->
        <li class="active-link">
            <a href="{{ url('/user/contactos') }}">
                <i class="pli-mens"></i>
                <span class="menu-title"><strong>Contactos</strong></span>
            </a>
        </li>


        <!--Menu list item-->
        <li>
            <a href="{{ url('/user/campaigns')}}">
                <i class="pli-mail-send"></i>
                <span class="menu-title">
												<strong>Campañas</strong>
											</span>
            </a>
        </li>

        <!--Menu list item-->
        <li>
            <a href="{{ url('/user/galery')}}">
                <i class="pli-photos"></i>
                <span class="menu-title">
												<strong>Galería</strong>
												<span class="pull-right badge badge-purple">@yield('newgalery')</span>
											</span>
            </a>
        </li>


    </ul>
    </li>

    </ul>
@endsection