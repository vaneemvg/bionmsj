@extends('layouts.master')

@section('listaction')
    <ul id="mainnav-menu" class="list-group">

        <!--Category name-->
        <li class="list-header">ACCIONES</li>


        <!--Menu list item-->
        <li>
            <a href="{{ url('/admin/campaigns')}}">
                <i class="pli-mail-send"></i>
                <span class="menu-title">
												<strong>Campañas</strong>
                    <span class="pull-right badge badge-purple">@yield('newcampaigns')</span>
											</span>
            </a>
        </li>

        <!--Menu list item-->
        <li>
            <a href="{{ url('/admin/galery')}}">
                <i class="pli-photos"></i>
                <span class="menu-title">
												<strong>Galería</strong>

											</span>
            </a>
        </li>

        <!--Menu list item-->
        <li>
            <a href="{{ url('/admin/users')}}">
                <i class="pli-gamepad-2"></i>
                <span class="menu-title">
												<strong>Usuarios</strong>
											</span>
            </a>
        </li>

    </ul>
@endsection