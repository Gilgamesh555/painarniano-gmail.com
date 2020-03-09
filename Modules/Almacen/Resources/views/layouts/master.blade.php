@extends('layouts.app')
@section('options')
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-edit"></i>Formularios <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('form.index') }}">Pedido de materiales</a></li>
                    <li><a href="form_advanced.html">Solicitud de compra</a></li>
                    <li><a href="form_validation.html">Orden de compra</a></li>
                    <li><a href="form_wizards.html">Nota de recepción</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-sitemap"></i> Estado de tramite </a>
            </li>
            <li><a><i class="fa fa-check"></i> Aprobar solicitud</span></a>
            </li>
            <li><a><i class="fa fa-history"></i>Historial de pedidos</span></a>
            </li>
        </ul>
    </div>
</div>
@endsection
