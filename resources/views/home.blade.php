@extends('layouts.app')

@section('content')

@if (session('status'))
    Inicie Sesión
@endif
<div class="">
    <div class="page-title">
        <div class="title_left">
        <h3>SERVICIOS DISPONIBLES</h3>
        </div>
    </div>

    <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel" style="height:100%;">
                    <div class="x_content">
                        <div class="row">

                            <div class="col-md-12">
                                <a href="{{ url('almacen') }}">
                                    <div class="col-md-3 col-sm-6  ">
                                        <div class="pricing">
                                            <div class="title">
                                                <h2></h2>
                                                <h1>SOLICITUD DE PEDIDOS</h1>
                                            </div>
                                            <div class="x_content">
                                                <div class="">
                                                    <div class="pricing_features" style="text-align: justify">
                                                        <P>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual</P>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
