@extends('almacen::layouts.master')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
        <h3>EDITAR MEDIDA</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_content">
                    <form class="" action="{{ route('unity.update', $unit->id) }}" method="post">
                        @method('PATCH')
                        @csrf
                        <span class="section">EDITE LOS CAMPOS QUE DESEE</span> 
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre:</label>
                            <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="name" type="text" value="{{$unit->name}}" placeholder="{{$unit->name}}">
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Anio:</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='optional' name="year" type="text" value="{{$unit->year}}">
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Estado:</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='optional' name="status" type="text" value="{{$unit->status}}">
                            </div>
                        </div>
                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type='submit' class="btn btn-primary btn-block">Guardar</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type='reset' class="btn btn-warning btn-block">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection