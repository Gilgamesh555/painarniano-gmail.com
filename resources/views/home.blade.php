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
                                @foreach ($system as $sys)
                                    
                                <a href="{{ url($sys->slug) }}">
                                    <div class="col-md-3 col-sm-6  ">
                                        <div class="pricing">
                                            <div class="title">
                                                <h2>{{ $sys->roleName }}</h2>
                                                <h1>{{ $sys->name }}</h1>
                                            </div>
                                            <div class="x_content">
                                                <div class="">
                                                    <div class="pricing_features" style="text-align: justify">
                                                            <P>{{ $sys->description }}</P>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
